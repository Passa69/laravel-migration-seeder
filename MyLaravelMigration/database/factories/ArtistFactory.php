<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName(),
        'surname' => $faker -> lastName(),
        'stage_name' => $faker -> name(),
        'date_of_birth' => $faker -> dateTime(),
        'year_of_debut' => $faker -> year(),
        'name_band' => $faker -> name()
    ];
});
