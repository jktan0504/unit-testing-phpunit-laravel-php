<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Exceptions\MuslimCannotBuyAcholicBeverageException;

// Models
use App\Beverage;
use App\User;

class BeverageTest extends TestCase
{
    use RefreshDatabase;

    private $beverage;

    // setup testcases
    public function setUp(): void {
        parent::setUp();
        // create beverage 
        $this->beverage = factory(Beverage::class)->make();

    }

    /**
     * A basic unit test for name attribute.
     *
     * @return void
     */
    public function test_beverage_name_attribute()
    {   
        // get beverage name 
        $beverageName = $this->beverage->name;

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
        $beverageType = $this->beverage->type;

        // assert
        $this->assertNotEmpty($beverageType); // if true == found type
    }

    /**
     * A basic unit test for muslim user (cannot drink alcohol) attribute.
     *
     * @return void
     */
    public function test_beverage_for_muslim_users()
    {   
        // alcoholic drinks
        $beverage = factory(Beverage::class)->make([
            'type' => 'alcoholic'
        ]);

        // users
        $user = factory(User::class)->make([
            'religious' => 'muslim'
        ]);
        
        // Logged In User
        $this->actingAs($user);
        
        // assert
        $this->expectException(MuslimCannotBuyAcholicBeverageException::class);

        // buy drink
        $beverage->buyDrink();   
    }
}
