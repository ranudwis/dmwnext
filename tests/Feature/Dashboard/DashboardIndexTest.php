<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DashboardIndexTest extends TestCase
{
    private $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }

    public function testDashboardCanOnlyBeAccessedByAuthenticatedUser()
    {
        $response = $this->get(route('dashboard.index'));

        $response->assertRedirect(route('auth.signin'));
    }

    public function testDashboardIndexCanBeAccessed()
    {
        $response = $this->actingAs($this->user)->get(route('dashboard.index'));

        $response->assertSuccessful();
        $response->assertViewIs('dashboard.index');
    }

    public function testDashboardPageHasSharedViewVariables()
    {
        $response = $this->actingAs($this->user)->get(route('dashboard.index'));

        $response->assertViewHasAll(['breadcrumbs', 'dashboard_active', 'dashboard_title']);
    }
}
