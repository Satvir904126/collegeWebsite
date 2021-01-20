<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Times;
use Faker\Generator as Faker;

$factory->define(Times::class, function (Faker $faker) {

    return [
        'time' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
