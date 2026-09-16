# Europaplus SDK feature factory

from europaplus_sdk.feature.base_feature import EuropaplusBaseFeature
from europaplus_sdk.feature.ratelimit_feature import EuropaplusRatelimitFeature
from europaplus_sdk.feature.retry_feature import EuropaplusRetryFeature
from europaplus_sdk.feature.test_feature import EuropaplusTestFeature
from europaplus_sdk.feature.timeout_feature import EuropaplusTimeoutFeature


_FEATURES = {
    "base": lambda: EuropaplusBaseFeature(),
    "ratelimit": lambda: EuropaplusRatelimitFeature(),
    "retry": lambda: EuropaplusRetryFeature(),
    "test": lambda: EuropaplusTestFeature(),
    "timeout": lambda: EuropaplusTimeoutFeature(),
}


def _make_feature(name):
    factory = _FEATURES.get(name)
    if factory is not None:
        return factory()
    return _FEATURES["base"]()


# True when this SDK was generated with the named feature class - the
# constructor's tolerance for extend-carried features reads this (an
# active name with no generated class must not become a BaseFeature
# stray when an extend instance carries it).
def _has_feature(name):
    return name in _FEATURES
