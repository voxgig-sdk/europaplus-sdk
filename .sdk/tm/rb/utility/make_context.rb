# Europaplus SDK utility: make_context
require_relative '../core/context'
module EuropaplusUtilities
  MakeContext = ->(ctxmap, basectx) {
    EuropaplusContext.new(ctxmap, basectx)
  }
end
