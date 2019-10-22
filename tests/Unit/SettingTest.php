<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Setting;

class SettingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->seed('SettingsTableSeeder');
    }

    public function testGetSettingsValue()
    {
        $value = Setting::get('greeting_message');

        $this->assertIsString($value);
    }

    public function testGetMultipleSettingsValue()
    {
        $values = Setting::getMultiple('greeting_message', 'about');

        $this->assertIsArray($values);

        $this->assertCount(2, $values);

        $this->assertIsString($values['greeting_message']);
    }
}
