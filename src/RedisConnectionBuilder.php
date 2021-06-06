<?php

namespace mgboot\poolx;

final class RedisConnectionBuilder implements ConnectionBuilderInterface
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

    public function buildConnection(): RedisConnection
    {
        return RedisConnection::create($this->settings, $this->pool);
    }
}
