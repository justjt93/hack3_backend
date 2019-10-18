<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;

class ScreeningController extends Controller
{
    public function index()
    {
        dd(\App\Screening::where('begins_at', ));
        // $screening = \App\Screening::whereDate('begins_at', '=', Carbon::today()->toDateString());
        $screening = \App\Screening::whereDate(substr('begins_at',0,10), '=', Carbon::today()->toDateString());
        return $screening;
    }
}
