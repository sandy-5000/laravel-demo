<?php

namespace App\Http\Controllers\Compiler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;


class CompilerHomeController extends Controller
{
    public function index(Request $_): View
    {
        return view('compiler.home');
    }

    public function editor(Request $_): View
    {
        return view('compiler.editor');
    }
}
