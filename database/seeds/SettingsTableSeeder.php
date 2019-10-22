<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => 'greeting_message',
            'label' => 'Pesan selamat datang',
            'value' => '<h2 class="title is-1">DMW++</h2><p class="subtitle is-3">Database Modul dan Webtutor</p>'
        ]);
    }
}
