# Europaplus SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module EuropaplusFeatures
  def self.make_feature(name)
    case name
    when "base"
      EuropaplusBaseFeature.new
    when "test"
      EuropaplusTestFeature.new
    else
      EuropaplusBaseFeature.new
    end
  end
end
