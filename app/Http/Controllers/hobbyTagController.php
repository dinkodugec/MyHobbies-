<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class hobbyTagController extends Controller
{
    public function getFilteredHobbies($tag_id)     /* HOBBIES FITERED WITH CERTAIN TAG */
     {

        $tag = new Tag();
        $hobbies = $tag::findOrFail($tag_id)->filteredHobbies()->paginate(10);

        $filter = $tag::find($tag_id);


        return view('hobby.index', [
            'hobbies' => $hobbies,
            'filter' => $filter
        ]);

    }
}

//findOrFail function - find tag_id, if not call error