<?php

namespace App\Http\Controllers;
use illuminate\View\View;
use Illuminate\Http\Request;

class industryController extends Controller
{
    public function industry():view 
    {
        return view('industry');
 
    }
}
