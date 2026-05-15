# ProjectName SDK exists test

import pytest
from europaplus_sdk import EuropaplusSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = EuropaplusSDK.test(None, None)
        assert testsdk is not None
