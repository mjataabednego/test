<?php

namespace App\Http\Controllers;
use illuminate\View\View;
use Illuminate\Http\Request;

class machineController extends Controller
{
    public function machine():view 
    {
        return view('machine');
 
    }
}
