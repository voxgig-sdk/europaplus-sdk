<?php
declare(strict_types=1);

// Europaplus SDK base feature

class EuropaplusBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    // Positions this feature when added via the client `extend` option:
    // "__before__" / "__after__" / "__replace__" name an already-added
    // feature (mirrors the ts feature `_options`). Declared so setting it
    // on an extension instance avoids the dynamic-property deprecation.
    public ?array $_options = null;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(EuropaplusContext $ctx, array $options): void {}
    public function PostConstruct(EuropaplusContext $ctx): void {}
    public function PostConstructEntity(EuropaplusContext $ctx): void {}
    public function SetData(EuropaplusContext $ctx): void {}
    public function GetData(EuropaplusContext $ctx): void {}
    public function GetMatch(EuropaplusContext $ctx): void {}
    public function SetMatch(EuropaplusContext $ctx): void {}
    public function PrePoint(EuropaplusContext $ctx): void {}
    public function PreSpec(EuropaplusContext $ctx): void {}
    public function PreRequest(EuropaplusContext $ctx): void {}
    public function PreResponse(EuropaplusContext $ctx): void {}
    public function PreResult(EuropaplusContext $ctx): void {}
    public function PreDone(EuropaplusContext $ctx): void {}
    public function PreUnexpected(EuropaplusContext $ctx): void {}
}
