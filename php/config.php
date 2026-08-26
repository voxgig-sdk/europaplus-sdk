<?php
declare(strict_types=1);

// Europaplus SDK configuration

class EuropaplusConfig
{
    /** @var array<string,mixed>|null */
    private static ?array $shared_config = null;

    /**
     * Return the process-wide config, built once on first use. The SDK reads
     * the config on every request and never writes to it, so one instance is
     * shared by every client rather than rebuilt per client.
     *
     * PHP arrays are copy-on-write, so callers that do mutate the result get
     * their own copy and cannot disturb the shared one.
     */
    public static function shared_config(): array
    {
        if (self::$shared_config === null) {
            self::$shared_config = self::make_config();
        }
        return self::$shared_config;
    }

    /**
     * Build a fresh, fully materialised config array. Every call rebuilds the
     * whole structure, so prefer shared_config unless you need a private copy.
     */
    public static function make_config(): array
    {
        return [
            "main" => [
                "name" => "Europaplus",
                "slug" => "europaplus",
                "version" => "0.0.1",
                "target" => "php",
            ],
            "feature" => [
                "test" => [
          'options' => [
            'active' => false,
          ],
          'transport' => 'base',
        ],
            ],
            "options" => [
                "base" => "https://www.europaplus.ru",
                "headers" => [
          'content-type' => 'application/json',
        ],
                "entity" => [
                    "schedule" => [],
                ],
            ],
            "entity" => [
        'schedule' => [
          'fields' => [
            [
              'name' => 'description',
              'short' => 'Program description',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'host',
              'short' => 'Host or DJ name',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'program',
              'short' => 'Name of the program',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'time',
              'short' => 'Time of the scheduled program',
              'type' => '`$STRING`',
            ],
          ],
          'name' => 'schedule',
          'op' => [
            'list' => [
              'input' => 'data',
              'name' => 'list',
              'points' => [
                [
                  'args' => [],
                  'kind' => 'http',
                  'method' => 'GET',
                  'orig' => '/schedule',
                  'parts' => [
                    'schedule',
                  ],
                  'select' => [],
                  'transform' => [
                    'req' => '`reqdata`',
                    'res' => '`body.schedule`',
                  ],
                ],
              ],
            ],
          ],
          'relations' => [
            'ancestors' => [],
          ],
        ],
      ],
        ];
    }


    public static function make_feature(string $name)
    {
        require_once __DIR__ . '/features.php';
        return EuropaplusFeatures::make_feature($name);
    }
}
