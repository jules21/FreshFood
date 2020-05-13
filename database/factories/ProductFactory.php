<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'category_id' => 1,
        'measure_id' => '1',
        'quantity_per_unit' => 150,
        'details' => $faker->address,
    ];
});
