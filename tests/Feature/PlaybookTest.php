<?php declare(strict_types=1);

namespace Rschoonheim\LaravelAdvancedFactories\Tests\Feature;

use Rschoonheim\LaravelAdvancedFactories\Contracts\TestingFixture;
use Rschoonheim\LaravelAdvancedFactories\Playbook;
use Rschoonheim\LaravelAdvancedFactories\Tests\FeatureTest;

/**
 * class PlaybookTest.
 *
 * @package Rschoonheim\LaravelAdvancedFactories\Tests\Feature;
 */
class PlaybookTest extends FeatureTest
{
    /** @test */
    public function create_returns_instance_of_playbook_builder(): void
    {
        $this->assertInstanceOf(
            Playbook\PlaybookBuilder::class,
            Playbook::create()
        );
    }
}
