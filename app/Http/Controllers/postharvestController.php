<?php

namespace App\Http\Controllers;
use illuminate\View\View;
use Illuminate\Http\Request;

class postharvestController extends Controller
{
    public function postharvest():view 
    {
        return view('postharvest');
 
    }
}
