# Europaplus SDK feature factory

from feature.base_feature import EuropaplusBaseFeature
from feature.test_feature import EuropaplusTestFeature


def _make_feature(name):
    features = {
        "base": lambda: EuropaplusBaseFeature(),
        "test": lambda: EuropaplusTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
