<?php

namespace App\Http\Controllers;
use illuminate\View\View;
use Illuminate\Http\Request;

class marketController extends Controller
{
    public function market():view 
    {
        return view('market');
 
    }
}
