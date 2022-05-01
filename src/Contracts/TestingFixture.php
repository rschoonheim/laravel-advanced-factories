<?php declare(strict_types=1);

namespace Rschoonheim\LaravelAdvancedFactories\Contracts;

use Rschoonheim\LaravelAdvancedFactories\Context;

/**
 * class TestingFixture.
 *
 * @package Rschoonheim\LaravelAdvancedFactories\Contracts
 */
interface TestingFixture
{
    /**
     * Insert information to a data storage medium.
     *
     * @param \Rschoonheim\LaravelAdvancedFactories\Context $context
     * @return void
     */
    public function run(Context $context): void;
}
