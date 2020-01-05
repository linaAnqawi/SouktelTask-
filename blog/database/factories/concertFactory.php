<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\concert;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(concert::class, function (Faker $faker) {
    return [
        'user_id'=>factory(App\sellerAndBuyerUsers::class),
        'name'=>$faker->name,
        'date'=>$faker->date(),
        'location'=>$faker->sentence

    ];
});
