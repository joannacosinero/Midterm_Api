<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Product;
use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Product::class, function (Faker $faker) {
    $productName = $faker->randomElement(['Nike ',' Shirt',' Flat Sandals',' Bag']);
    return [
        'user_id' => rand(1, 20),
        'product_name' => $productName,
        'description' => $faker->paragraph,
    ];
});
