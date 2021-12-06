<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{


    public function hobbies()
    {
        return $this->belongsToMany('App\Hobby');
    }
    
    protected $fillable = [   //7.korak
        'name', 'style',
    ];
}
