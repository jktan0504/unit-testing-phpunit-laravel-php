<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Beverage;

class BeverageFeatureTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_beverage_page_see_beverages()
    {
        $beverage = factory(Beverage::class)->make();

        // beverage route
        $response = $this->get('/beverage');

        $response->assertSee($beverage->name);

        $response->assertStatus(200); // check is this route exist ? 200 : 404
    }
}
