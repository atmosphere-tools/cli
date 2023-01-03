<?php

declare(strict_types=1);


namespace Atmosphere\Cli\Tests\Suites\Unit;


use Atmosphere\Cli\Atmosphere;
use Atmosphere\Cli\Tests\TestCase;
use Atmosphere\Cli\Models\Cli\Input;

/**
 * @author Romano Schoonheim <romano@consumind.nl>
 * @package Atmosphere\Cli\Tests\Suites\Unit;
 */
class AtmosphereTest extends TestCase
{

    /** @test */
    public function we_can_create_an_instance_of_atmosphere(): void
    {
        $argumentCount = 1;
        $arguments = ['atmosphere'];

        $instance = new Atmosphere(
            input: Input::make(
            argumentCount: $argumentCount,
            arguments    : $arguments
        )
        );

        $this->assertInstanceOf(Atmosphere::class, $instance);
        $this->assertSame($argumentCount, $instance->input->argumentCount);
        $this->assertSame($arguments, $instance->input->arguments);
    }

    /** @test */
    public function run_will_void(): void
    {
        $instance = new Atmosphere(Input::make(argumentCount: 0, arguments: []));
        $this->assertNull(
            $instance->run()
        );
    }

}