<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Live;
use Faker\Generator as Faker;

$factory->define(Live::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'post_image' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
