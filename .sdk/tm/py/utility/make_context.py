# Europaplus SDK utility: make_context

from core.context import EuropaplusContext


def make_context_util(ctxmap, basectx):
    return EuropaplusContext(ctxmap, basectx)
