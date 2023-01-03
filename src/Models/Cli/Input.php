<?php

declare(strict_types=1);

namespace Atmosphere\Cli\Models\Cli;

/**
 * @author Romano Schoonheim <romano@consumind.nl>
 * @package Atmosphere\Cli\Models\Cli;
 */
readonly class Input
{

    public function __construct(
        public int $argumentCount,
        public array $arguments,
    ) {}

    public static function make(
        int $argumentCount,
        array $arguments
    ): self
    {
        return new self(
            argumentCount: $argumentCount,
            arguments: $arguments
        );
    }
}