<?php declare(strict_types=1);

namespace Rschoonheim\LaravelAdvancedFactories\Tests;

use Orchestra\Testbench\TestCase;
use Rschoonheim\LaravelAdvancedFactories\Providers\AdvancedFactoriesServiceProvider;

/**
 * class FeatureTest.
 *
 * @package Rschoonheim\LaravelAdvancedFactories\Tests;
 */
abstract class FeatureTest extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            AdvancedFactoriesServiceProvider::class,
        ];
    }
}
