<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{


    public function hobbies()
    {
        return $this->belongsToMany('App\Hobby');
    }

    public function filteredHobbies()     //meginig(spajanje) with pivot table
     {          
        return $this->belongsToMany('App\Hobby')
            ->wherePivot('tag_id', $this->id)
            ->orderBy('updated_at', 'DESC');
    }
    
    protected $fillable = [   //7.korak
        'name', 'style',
    ];
}
