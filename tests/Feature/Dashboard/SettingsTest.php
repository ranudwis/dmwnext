<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class SettingsTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
        $this->admin = factory(User::class)->state('admin')->create();

        $this->seed('SettingsTableSeeder');
    }

    public function testCantBeAccessedByNormalUser()
    {
        $response = $this->actingAs($this->user)->get(route('dashboard.settings'));

        $response->assertRedirect(route('dashboard.index'));
    }

    public function testSettingsPageCanBeAccessedByAdmin()
    {
        $response = $this->actingAs($this->admin)->get(route('dashboard.settings'));

        $response->assertSuccessful();

        $response->assertViewIs('dashboard.settings.index');
        $response->assertViewHas('settings');
    }

    public function testEditPageCanBeAccessed()
    {
        $response = $this->actingAs($this->admin)
            ->get(route('dashboard.settings.edit', [
                'name' => 'greeting_message'
            ]));

        $response->assertSuccessful();
        $response->assertViewHas('setting');
    }

    public function testCanUpdateSetting()
    {
        $edited_value = 'asdfasdfasdf';

        $response = $this->actingAs($this->admin)
            ->postJson(route('dashboard.settings.update', [
                'name' => 'greeting_message'
            ]), [
                'value' => $edited_value
            ]);

        $response->assertRedirect(route('dashboard.settings'));

        $response = $this->get(route('home'));
        $response->assertSeeText($edited_value);
    }
}
