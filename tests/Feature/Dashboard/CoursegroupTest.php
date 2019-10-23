<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CoursegroupTest extends TestCase
{
    use WithFaker;

    private $admin;

    public function setUp(): void
    {
        parent::setUp();

        $this->admin = factory(User::class)->create([
            'admin' => true
        ]);
    }

    public function testPageCanBeAccessed()
    {
        $response = $this->actingAs($this->admin)->get(route('dashboard.coursegroups'));

        $response->assertSuccessful();
        $response->assertViewIs('dashboard.coursegroups.index');
    }

    public function testCreatePageCanBeAccessed()
    {
        $response = $this->actingAs($this->admin)->get(route('dashboard.coursegroups.create'));

        $response->assertSuccessful();
        $response->assertViewIs('dashboard.coursegroups.create');
    }

    public function testCanAddnewCoursegroup()
    {
        $name = $this->faker->name;

        $response = $this->actingAs($this->admin)
            ->post(route('dashboard.coursegroups.store'), [
                'name' => $name
            ]);

        $response->assertRedirect(route('dashboard.coursegroups'));
        $this->assertDatabaseHas('coursegroups', [
            'name' => $name
        ]);
    }
}
