<?php
declare(strict_types=1);

// Europaplus SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class EuropaplusFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new EuropaplusBaseFeature();
            case "test":
                return new EuropaplusTestFeature();
            default:
                return new EuropaplusBaseFeature();
        }
    }
}
