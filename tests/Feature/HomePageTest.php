<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function setUp(): void
    {
        parent::setUp();

        $this->seed('SettingsTableSeeder'); // Homepage needs data from settings table
    }

    public function testHomepageCanBeAccessed()
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);

        $response->assertViewIs('home');
    }
}
