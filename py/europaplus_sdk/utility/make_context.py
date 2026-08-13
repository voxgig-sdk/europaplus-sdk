# Europaplus SDK utility: make_context

from europaplus_sdk.core.context import EuropaplusContext


def make_context_util(ctxmap, basectx):
    return EuropaplusContext(ctxmap, basectx)
