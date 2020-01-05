<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Eloquent\Model;
use App\sellerAndBuyerUsers;
use Faker\Generator as Faker;
$factory->define(sellerAndBuyerUsers::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'sellerOrBuyer'=>$faker->boolean
    ];
});
