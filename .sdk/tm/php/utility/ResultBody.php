<?php
declare(strict_types=1);

// Europaplus SDK utility: result_body

class EuropaplusResultBody
{
    public static function call(EuropaplusContext $ctx): ?EuropaplusResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
