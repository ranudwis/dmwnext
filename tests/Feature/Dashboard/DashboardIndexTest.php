<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDashboardCanOnlyBeAccessedByAuthenticatedUser()
    {
        $response = $this->get(route('dashboard.index'));

        $response->assertRedirect(route('auth.signin'));
    }
}
