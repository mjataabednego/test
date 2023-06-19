<?php

namespace App\Http\Controllers;
use illuminate\View\View;
use Illuminate\Http\Request;

class logController extends Controller
{
    public function log():view
    {
        return view('log');
    }

}
