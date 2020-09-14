<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Provider;
use Faker\Generator as Faker;

$factory->define(Provider::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'active' => $faker->boolean,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});
