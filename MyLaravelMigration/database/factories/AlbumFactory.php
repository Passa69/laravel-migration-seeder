<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'name_album' => $faker -> name(),
        'description' => $faker -> text(),
        'date_of_release' => $faker -> dateTime(),
        'number_of_listeners' => $faker -> numberBetween(0, 100000),
        'number_of_copies_sold' => $faker -> numberBetween(0, 100000)
    ];
});
