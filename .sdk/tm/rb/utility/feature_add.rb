# Europaplus SDK utility: feature_add
module EuropaplusUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
