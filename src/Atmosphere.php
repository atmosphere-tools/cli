<?php

declare(strict_types=1);

namespace Atmosphere\Cli;

readonly class Atmosphere
{
    public function __construct(public int $argumentCount, public array $arguments)
    {
        var_dump($this);
    }

}