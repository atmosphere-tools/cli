<?php

declare(strict_types=1);


namespace Atmosphere\Cli\Actions;


/**
 * @author Romano Schoonheim <romano@consumind.nl>
 * @package Atmosphere\Cli\Actions;
 */
class HelpAction
{
    public function execute(array $arguments): void
    {
        echo json_encode($arguments);
    }
}