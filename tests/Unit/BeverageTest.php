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

    private $beverages;

    // setup testcases
    public function setUp(): void {
        parent::setUp();
        // create beverage 
        $this->beverages = factory(Beverage::class)->make();

    }

    /**
     * A basic unit test for name attribute.
     *
     * @return void
     */
    public function test_beverage_name_attribute()
    {   
        // get beverage name 
        $beverageName = $this->beverages->name;

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
        // get beverage type 
        $beverageType = $this->beverages->type;

        // assert
        $this->assertNotEmpty($beverageType); // if true == found type
    }
}
