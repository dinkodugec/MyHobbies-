<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    
    protected $fillable = [   //7.korak
        'name', 'style',
    ];
}
