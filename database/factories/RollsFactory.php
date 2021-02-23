<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Rolls;
use Faker\Generator as Faker;

$factory->define(Rolls::class, function (Faker $faker) {

    return [
        'student_id' => $faker->randomDigitNotNull,
        'username' => $faker->word,
        'password' => $faker->word,
        'login_time' => $faker->date('Y-m-d H:i:s'),
        'logout_time' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
