<?php

namespace App\Http\Controllers;
use illuminate\View\View;
use Illuminate\Http\Request;

class payController extends Controller
{
    public function pay():view 
    {
        return view('pay');
 
    }
}
