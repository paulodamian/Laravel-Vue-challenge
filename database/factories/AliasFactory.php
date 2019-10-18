<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alias;
use Faker\Generator as Faker;

$factory->define(Alias::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName
    ];
});
