<?php

namespace App\Http\Controllers;
use illuminate\View\View;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function service():view 
    {
        return view('service');
 
    }
}
