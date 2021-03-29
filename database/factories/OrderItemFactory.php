<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\OrderItem;
use App\Model;
use Faker\Generator as Faker;

$factory->define(OrderItem::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 20),
        'product_id' => rand(1, 20),
        'quantity' => rand(1,20),
        'price' =>$faker->numberBetween($min = 1500, $max = 5000),
    ];
});
