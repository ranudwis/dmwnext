<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class SignupTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSignupPageCanBeAccessed()
    {
        $response = $this->get(route('auth.signup'));

        $response->assertStatus(200);

        $response->assertViewIs('auth.signup');
    }

    public function testCanDoSignup()
    {
        $user = factory(User::class)->make();

        $response = $this->postJson(route('auth.signup'), [
            'name' => $user->name,
            'id_number' => $user->id_number,
            'email' => $user->email,
            'username' => $user->username,
            'password' => $user->password,
            'password_confirmation' => $user->password
        ]);

        $response->assertRedirect(route('dashboard.index'));
    }
}
