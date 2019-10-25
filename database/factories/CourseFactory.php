<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'code' => $faker->numerify('AIK###'),
        'name' => $faker->name,
        'credit' => $faker->digit,
        'slug' => $faker->word,
        'description' => $faker->paragraph(5)
    ];
});
