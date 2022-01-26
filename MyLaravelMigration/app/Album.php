<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name_album',
        'description',
        'date_of_release',
        'number_of_listeners',
        'number_of_copies_sold'
    ];
}
