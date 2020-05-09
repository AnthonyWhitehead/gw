<?php

namespace App\Http\Controllers;

use App\Http\Services\Contracts\PoemServiceContract;
use Exception;
use App\Models\Poem;
use Illuminate\Http\Response;

class PoemController extends Controller
{
    /**
     *
     * @var PoemServiceContract 
     */
    private $poemService;

    /**
     *
     * @param PoemServiceContract $poemService
     */
    public function __construct(PoemServiceContract $poemService)
    {
        $this->poemService = $poemService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Get and serve Poem by title
     *
     * @param string title 
     * @return \Illuminate\Http\Response
     */
    public function show(String $title): Response
    {

        try {
            $poem = Poem::where('title', $title)->first();
        } catch (Exception $e) {
            report($e);
        }

        abort_if(!$poem, '404', 'Poem not found');

        return response($poem);
    }
    
    /**
     * get a list of all poems categorised 
     * by category, in a format the front end
     * can use to render the nav links
     *
     * @return Response
     */
    public function getPoemLinks()
    {
        return $this->poemService->getPoemLinks();
    }
}
