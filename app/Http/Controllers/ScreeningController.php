<?php

namespace App\Http\Controllers;

use App\theater;
use Carbon\Carbon;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use DB;

class ScreeningController extends Controller
{
    public function index(Request $request)
    {

        // $query = 'SELECT *
        //             FROM screenings
        //             LEFT JOIN movies
        //              ON screenings.movie_id = movies.id';

        // $results = select($query);
        // dd($results);

        $slug = $request->input();
        dd($slug);
        
        $screening = DB::table('screenings')
               ->whereDate('begins_at', date('Y-m-d'))
               ->where('theater_id', $id)
               ->pluck('movie_id');

        $movies = DB::table('movies')
                ->whereIN('id',$screening)
                ->pluck('name');
        return $movies;
        



    }

}
