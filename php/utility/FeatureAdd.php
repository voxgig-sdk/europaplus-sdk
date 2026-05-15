<?php
declare(strict_types=1);

// Europaplus SDK utility: feature_add

class EuropaplusFeatureAdd
{
    public static function call(EuropaplusContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
