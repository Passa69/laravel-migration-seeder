<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'name',
        'surname',
        'stage_name',
        'date_of_birth',
        'year_of_debut',
        'name_band'
    ];
}
