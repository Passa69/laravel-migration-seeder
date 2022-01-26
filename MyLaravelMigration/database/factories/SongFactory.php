<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'single' => $faker -> boolean(),
        'date_of_release' => $faker -> dateTime(),
        'featuring' => $faker -> boolean(),
        'genre' => $faker -> word(),
        'duration' => $faker -> numberBetween(30, 600),
        'number_of_listeners' => $faker -> numberBetween(30, 100000)
    ];
});
