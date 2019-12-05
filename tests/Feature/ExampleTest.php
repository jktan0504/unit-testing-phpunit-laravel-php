<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFirstRoute()
    {
        // first route
        $response = $this->get('/');

        // $response->assertStatus(200); // check is this route exist ? 200 : 404
        
        // more on "https://laravel.com/docs/6.x/http-tests"

        $response->assertSeeInOrder(['Laravel','Docs']);
    }
}
