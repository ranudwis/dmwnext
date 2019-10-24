<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\{User, Coursegroup};

class CourseTest extends TestCase
{
    private $admin;

    public function setUp():void
    {
        parent::setUp();

        $this->seed('CourseSeeder');

        $this->admin = factory(User::class)->state('admin')->create();
    }

    public function testCanAddNewCourse()
    {
        $coursegroup_id = Coursegroup::first()->id;

        $post_data = [
            'code' => 'AIK122',
            'name' => 'Programming Course',
            'coursegroup_id' => $coursegroup_id,
            'credit' => '4',
            'slug' => 'pc',
            'description' => 'The programming course is something'
        ];

        $response = $this->actingAs($this->admin)
            ->postJson(route('dashboard.courses.store'), $post_data);

        $response->assertRedirect(route('dashboard.courses'));
        $this->assertDatabaseHas('courses', $post_data);
    }
}
