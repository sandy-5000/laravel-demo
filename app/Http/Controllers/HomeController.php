<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller 
{
    public function index(Request $_): View
    {
        return view('home');
    }
}
