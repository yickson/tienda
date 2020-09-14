<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Bezhanov\Faker\Provider\Commerce;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $faker->addProvider(new Commerce($faker));
    return [
        'provider_id' => $faker->numberBetween(1, 3),
        'category_id' => $faker->numberBetween(1, 5),
        'product_condition_id' => $faker->numberBetween(1, 3),
        'active' => $faker->boolean,
        'name' => $faker->productName,
        'reference' => $faker->randomNumber(4),
        'quantity' => $faker->numberBetween(10, 1000),
        'price' => $faker->numberBetween(100, 2000),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});
