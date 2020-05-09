<?php

namespace App\Http\Services;

use Illuminate\Http\Response;
use App\Http\Services\Contracts\PoemServiceContract;
use App\Models\Poem;

class PoemService implements PoemServiceContract
{
    /**
     * get a list of all poems categorised 
     * by category, in a format the front end
     * can use to render the nav links
     *
     * @return Response
     */
    public function getPoemLinks(): Response
    {
        $poems = Poem::all('category', 'title')->groupBy('category')->map(function($poemGroup) {
            return $poemGroup->map(function($poem){
                return $poem->title;
            });
        });

        return response($poems);
    }
}
