<?php
declare(strict_types=1);

// Europaplus SDK utility: result_headers

class EuropaplusResultHeaders
{
    public static function call(EuropaplusContext $ctx): ?EuropaplusResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
