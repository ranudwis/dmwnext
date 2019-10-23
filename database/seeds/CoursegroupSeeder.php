<?php

use Illuminate\Database\Seeder;

class CoursegroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coursegroups')->insert([
            [
                'name' => 'Semester 1'
            ], [
                'name' => 'Semester 2'
            ], [
                'name' => 'Semester 3'
            ], [
                'name' => 'Semester 4'
            ], [
                'name' => 'Semester 5'
            ], [
                'name' => 'Semester 6'
            ], [
                'name' => 'Pilihan Semester Ganjil'
            ], [
                'name' => 'Pilihan Semester Genap'
            ],
        ]);
    }
}
