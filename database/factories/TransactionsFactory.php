<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transactions;
use Faker\Generator as Faker;

$factory->define(Transactions::class, function (Faker $faker) {

    return [
        'student_id' => $faker->randomDigitNotNull,
        'fee_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'paid_amount' => $faker->randomDigitNotNull,
        'transaction_date' => $faker->word,
        'remark' => $faker->text,
        'describtion' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
