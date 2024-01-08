<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenyController extends Controller
{
    public function hem()
    {
        return view('hem');
    }

    public function omOss()
    {
        return view('om-oss');
    }

    public function spelningar()
    {
        return view('spelningar');
    }

    public function kontakt()
    {
        return view('kontakt');
    }

    public function fourOTwo()
    {
        return view('402');
    }
}
