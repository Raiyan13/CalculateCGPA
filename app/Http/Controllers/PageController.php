<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

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
        Session::flash('unsaved', 'This is a save message!');
        return view('records');
    }
}
