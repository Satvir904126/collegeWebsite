<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Courses;
use Faker\Generator as Faker;

$factory->define(Courses::class, function (Faker $faker) {

    return [
        'course_name' => $faker->word,
        'course_code' => $faker->word,
        'describtion' => $faker->text,
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
