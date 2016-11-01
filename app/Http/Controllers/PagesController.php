<?php

namespace App\Http\Controllers;

use App\Flyer;
use App\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $flyers = Flyer::get();
        return view('pages.home');
    }

}
