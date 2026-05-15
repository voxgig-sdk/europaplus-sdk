<?php
declare(strict_types=1);

// Europaplus SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class EuropaplusMakeContext
{
    public static function call(array $ctxmap, ?EuropaplusContext $basectx): EuropaplusContext
    {
        return new EuropaplusContext($ctxmap, $basectx);
    }
}
