<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\assignings;
use Faker\Generator as Faker;

$factory->define(assignings::class, function (Faker $faker) {

    return [
        'teacher_id' => $faker->randomDigitNotNull,
        'class_schedule_id' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
