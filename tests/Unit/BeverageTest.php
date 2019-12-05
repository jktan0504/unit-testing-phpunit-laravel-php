<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

// Models
use App\Beverage;

class BeverageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test for name attribute.
     *
     * @return void
     */
    public function test_beverage_name_attribute()
    {   
        // create beverage 
        $beverages = factory(Beverage::class)->make();

        // get beverage name 
        $beverageName = $beverages->name;

        // assert
        $this->assertNotEmpty($beverageName); // if true == found name
    }

    /**
     * A basic unit test for type attribute.
     *
     * @return void
     */
    public function test_beverage_type_attribute()
    {   
        // create beverage 
        $beverages = factory(Beverage::class)->make();

        // get beverage type 
        $beverageType = $beverages->type;

        // assert
        $this->assertNotEmpty($beverageType); // if true == found type
    }
}
