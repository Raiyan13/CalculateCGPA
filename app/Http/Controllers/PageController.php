<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function calculator()
    {
        return view('calculator');
    }

    public function home()
    {
        return view('welcome');
    }

    public function records()
    {
        return view('records');
    }
}
