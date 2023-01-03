<?php

declare(strict_types=1);


namespace Atmosphere\Cli\Models;


use Atmosphere\Cli\Models\Cli\Input;
use Atmosphere\Cli\Actions\HelpAction;

/**
 * @author Romano Schoonheim <romano@consumind.nl>
 * @package Atmosphere\Cli\Models;
 */
class Action
{
    public function __construct(
        public object $action,
    ) {}

    /**
     * Convert the input to an action.
     *
     * @param  Input  $input
     * @return static
     */
    public static function make(Input $input): self
    {
        return match($input->command()) {
            default => new self(new HelpAction()),
        };
    }

    /**
     * Forward calls to the action related to the command.
     *
     * @param  string  $name
     * @param  array  $arguments
     *
     * @return void
     */
    public function __call(string $name, array $arguments)
    {
        return $this->action->{$name}(...$arguments);
    }
}