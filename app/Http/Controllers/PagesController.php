<?php

namespace App\Http\Controllers;

use App\Flyer;
use App\Photo;
use App\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $flyers = Flyer::all();
        
        return view('pages.home', compact('flyers'));
    }

}
