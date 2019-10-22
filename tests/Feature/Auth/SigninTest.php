<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class SigninTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSigninPageCanBeAccessed()
    {
        $response = $this->get(route('auth.signin'));

        $response->assertStatus(200);

        $response->assertViewIs('auth.signin');
    }

    public function testUserCanDoSignin()
    {
        $password = 'some password';

        $user = factory(User::class)->create([
            'password' => $password
        ]);

        $response = $this->postJson(route('auth.signin'), [
            'username' => $user->username,
            'password' => $password
        ]);

        $response->assertRedirect(route('dashboard.index'));
    }

    public function testUserCantSigninWithIncorrectCredentials()
    {
        $user = factory(User::class)->create();

        $response = $this->postJson(route('auth.signin'), [
            'username' => 'random username',
            'password' => 'some incorrect password'
        ]);

        $response->assertRedirect(route('auth.signin'));
        $response->assertSessionHasErrors('failed');
    }

    public function testSigninPageCanOnlyBeAccessedByGuest()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get(route('auth.signin'));

        $response->assertRedirect(route('dashboard.index'));
    }

    public function testUserCanDoSignout()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get(route('signout'));

        $response->assertRedirect(route('home'));
    }
}
