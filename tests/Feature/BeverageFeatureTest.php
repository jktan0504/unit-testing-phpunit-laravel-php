<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BeverageFeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_beverage_page_see_beverages()
    {
        // beverage route
        $response = $this->get('/beverage');

        $response->assertStatus(200); // check is this route exist ? 200 : 404
    }
}
