# Laravel Advanced Factories

Laravels factories provide us a convenient way of managing data in our database when writing tests.
The factories that Laravel provides us is focussed on Eloquent models.
Laravel advanced factories makes this process more convenient by providing those factories beyond Eloquent models.

## Usage example

```php
<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Rschoonheim\LaravelAdvancedFactories\Playbook;use Tests\TestCase;

class UserOrderControllerTest extends TestCase
{
    /** @test */
    public function index_returns_the_orders_of_the_user(): void
    {
        Playbook::create()
                ->addFixture(\\Tests\\Fixtures\\Database\\ProductFixture::class)        
                ->addFixture(\\Tests\\Fixtures\\Database\\ProductPriceFixture::class)        
                ->addFixture(\\Tests\\Fixtures\\Filesystem\\ProductImage::class)
                ->run();
    }
}
```




