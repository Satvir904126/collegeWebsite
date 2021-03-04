<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\blogs;
use Faker\Generator as Faker;

$factory->define(blogs::class, function (Faker $faker) {

    return [
        'blog_name' => $faker->word,
        'category' => $faker->word,
        'content' => $faker->word,
        'student_id' => $faker->word,
        'image' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
