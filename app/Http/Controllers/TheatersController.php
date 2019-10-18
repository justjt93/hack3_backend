<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TheatersController extends Controller
{
    public function index()
    {
        $theater = \App\Theater::all();
        return $theater;
    }
}
