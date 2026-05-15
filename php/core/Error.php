<?php
declare(strict_types=1);

// Europaplus SDK error

class EuropaplusError extends \Exception
{
    public bool $is_sdk_error;
    public string $sdk;
    public string $sdk_code;
    public string $msg;
    public mixed $ctx;
    public mixed $result;
    public mixed $spec;

    public function __construct(string $code = '', string $msg = '', mixed $ctx = null)
    {
        parent::__construct($msg);
        $this->is_sdk_error = true;
        $this->sdk = 'Europaplus';
        $this->sdk_code = $code;
        $this->msg = $msg;
        $this->ctx = $ctx;
        $this->result = null;
        $this->spec = null;
    }

    public function error(): string
    {
        return $this->msg;
    }

    public function __toString(): string
    {
        return $this->msg;
    }
}
