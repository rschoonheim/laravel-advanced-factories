<?php declare(strict_types=1);

namespace Rschoonheim\LaravelAdvancedFactories\Contracts;

/**
 * class TestingFixture.
 *
 * @package Rschoonheim\LaravelAdvancedFactories\Contracts
 */
interface TestingFixture
{
    public function run(): void;
}
