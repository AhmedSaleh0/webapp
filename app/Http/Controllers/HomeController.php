<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function comingSoon()
    {
        return view('coming-soon');
    }

    public function privacy()
    {
        return view('privacy-policy');
    }
}
