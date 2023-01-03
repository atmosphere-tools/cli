<?php

declare(strict_types=1);

namespace Atmosphere\Cli\Models\Cli;

use Atmosphere\Cli\Models\Action;

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

    public function command(): null|string
    {
        return $this->arguments[0] ?? null;
    }

    public function arguments(): array
    {
        return array_slice($this->arguments, 1);
    }

    public function action(): Action
    {
        return Action::make($this);
    }
}