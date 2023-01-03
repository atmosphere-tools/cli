<?php

declare(strict_types=1);

namespace Atmosphere\Cli;

use Atmosphere\Cli\Models\Cli\Input;

readonly class Atmosphere
{
    public function __construct(public Input $input)
    {}

    public function run(): void
    {
        $result = $this->input->action()->execute(
            $this->input->arguments()
        );

        echo PHP_EOL;
    }
}