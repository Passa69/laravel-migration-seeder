<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'name',
        'single',
        'date_of_release',
        'featuring',
        'genre',
        'duration',
        'number_of_listeners'
    ];
}
