<?php declare(strict_types=1);

namespace Rschoonheim\LaravelAdvancedFactories\Tests\Feature\Playbook;

use Rschoonheim\LaravelAdvancedFactories\Contracts\TestingFixture;
use Rschoonheim\LaravelAdvancedFactories\Playbook\PlaybookBuilder;
use Rschoonheim\LaravelAdvancedFactories\Tests\FeatureTest;

/**
 * class PlaybookBuilderTest.
 *
 * @package Rschoonheim\LaravelAdvancedFactories\Tests\Feature\Playbook
 */
class PlaybookBuilderTest extends FeatureTest
{
    /** @test */
    public function create_returns_instance_of_playbook_builder(): void
    {
        $this->assertInstanceOf(
            PlaybookBuilder::class,
            PlaybookBuilder::create()
        );
    }

    /** @test */
    public function add_fixture_adds_fixture_to_playbook(): void
    {
        $playbook = PlaybookBuilder::create()->addFixture(new FakeFixture());
    }
}

class FakeFixture implements TestingFixture {
    public function run(): void
    {
        // TODO: Implement run() method.
    }
}
