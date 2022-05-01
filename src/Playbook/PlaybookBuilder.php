<?php declare(strict_types=1);

namespace Rschoonheim\LaravelAdvancedFactories\Playbook;

use Rschoonheim\LaravelAdvancedFactories\Contracts\TestingFixture;

/**
 * class PlaybookBuilder.
 *
 * @package Rschoonheim\LaravelAdvancedFactories\Playbook;
 */
class PlaybookBuilder
{
    /** @var TestingFixture[] $fixtures */
    private array $fixtures = [];

    public static function create(): self
    {
        return new self();
    }

    public function addFixture(TestingFixture $fixture): self
    {
        $this->fixtures[] = $fixture;
        return $this;
    }

    // todo: Move run to playbook object.
    public function run(): void
    {
        foreach ($this->fixtures as $fixture) {
            $fixture->run();
        }
    }
}
