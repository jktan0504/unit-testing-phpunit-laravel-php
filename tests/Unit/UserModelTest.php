<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

// Models
use App\User;

class UserModelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_has_fullname_attribute ()
    {
        $email = 'jktan0504@hotmail.com';
        // create new User
        $user = User::where('email', $email)->first();
        if (!$user) {
            $user = User::create([
                'firstname' => 'JK',
                'lastname' => 'TAN',
                'email' => 'jktan0504@hotmail.com',
                'password' => 'secret123'
            ]);
        }
        
        $this->assertEquals('JK TAN', $user->fullname);
    }
}
