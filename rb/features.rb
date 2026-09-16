# Europaplus SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module EuropaplusFeatures
  def self.make_feature(name)
    case name
    when "base"
      EuropaplusBaseFeature.new
    when "ratelimit"
      EuropaplusRatelimitFeature.new
    when "retry"
      EuropaplusRetryFeature.new
    when "test"
      EuropaplusTestFeature.new
    when "timeout"
      EuropaplusTimeoutFeature.new
    else
      EuropaplusBaseFeature.new
    end
  end
end
