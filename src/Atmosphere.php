<?php

declare(strict_types=1);

namespace Atmosphere\Cli;

readonly class Atmosphere
{
    public function __construct(public int $argc, public array $argv)
    {
        var_dump($this);
    }

}