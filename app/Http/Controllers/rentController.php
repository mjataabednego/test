<?php

namespace App\Http\Controllers;
use illuminate\View\View;
use Illuminate\Http\Request;

class rentController extends Controller
{
    public function rent():view 
    {
        return view('rent');
 
    }
}
