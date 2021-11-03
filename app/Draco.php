<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Draco extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'value'
    ];
}
