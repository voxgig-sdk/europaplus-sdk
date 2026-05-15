<?php
declare(strict_types=1);

// Europaplus SDK utility: prepare_body

class EuropaplusPrepareBody
{
    public static function call(EuropaplusContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
