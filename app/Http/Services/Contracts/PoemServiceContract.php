<?php

namespace App\Http\Services\Contracts;

use Illuminate\Http\Response;

interface PoemServiceContract
{
    /**
     * get a list of all poems categorised 
     * by category, in a format the front end
     * can use to render the nav links
     *
     * @return Response
     */
    public function getPoemLinks(): Response;
}
