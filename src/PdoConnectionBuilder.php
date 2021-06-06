<?php

namespace mgboot\poolx;

final class PdoConnectionBuilder implements ConnectionBuilderInterface
{
    private array $settings;
    private ?PoolInterface $pool;

    private function __construct(array $settings, ?PoolInterface $pool  = null)
    {
        $this->settings = $settings;
        $this->pool = $pool;
    }

    private function __clone(): void
    {
    }

    public function buildConnection(): PdoConnection
    {
        return PdoConnection::create($this->settings, $this->pool);
    }
}
