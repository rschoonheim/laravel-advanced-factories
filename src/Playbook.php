<?php declare(strict_types=1);

namespace Rschoonheim\LaravelAdvancedFactories;

use Illuminate\Support\Facades\Facade;
use Rschoonheim\LaravelAdvancedFactories\Playbook\PlaybookBuilder;

/**
 * class Playbook.
 *
 * @package Rschoonheim\LaravelAdvancedFactories
 * @method static PlaybookBuilder create()
 */
class Playbook extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return PlaybookBuilder::class;
    }
}
