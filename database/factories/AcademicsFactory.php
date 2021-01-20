<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Academics;
use Faker\Generator as Faker;

$factory->define(Academics::class, function (Faker $faker) {

    return [
        'academic_year' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
