<?php

namespace App\Http\Controllers;
use illuminate\View\View;
use Illuminate\Http\Request;

class ordermachineController extends Controller
{
   
    public function ordermachine():view 
    {
        return view('ordermachine');
 
    }
}
