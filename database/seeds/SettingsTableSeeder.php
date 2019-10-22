<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->insert([
            [
                'name' => 'greeting_message',
                'label' => 'Pesan selamat datang',
                'description' => 'Pesan selamat datang yang ditampilkan pada halaman utama',
                'value' => '<h2 class="title is-1">DMW++</h2><p class="subtitle is-3">Database Modul dan Webtutor</p>'
            ], [
                'name' => 'about',
                'label' => 'Tentang DMW++',
                'description' => 'Penjelasan singkat mengenai DMW++ yang ditampilkan pada halaman utama',
                'value' => '<p>DMW++ adalah website yang disediakan oleh Divisi Pendidikan Dan Pelatihan Himpunan Mahasiswa Informatika Universitas Diponegoro</p>'
            ]
        ]);
    }
}
