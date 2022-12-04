<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'category' => $faker->words($nb = 2, $asText = false) ,
        'thumbnail' => $faker->imageUrl($width = 320, $height = 240),
        'video' => $faker->sentence($nbWords = 6, $variableNbWords = true), 
        'post_image' => $faker->imageUrl($width = 640, $height = 480),
        'body'=> $faker->text($maxNbChars = 200),
        'downloads' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5),
        'votes' => $faker->numberBetween($min = 0, $max = 5),
        'capacity' => $faker->numberBetween($min = 5, $max = 100),
    ];
});
