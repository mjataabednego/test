<?php

namespace App\Http\Controllers;
use illuminate\View\View;
use Illuminate\Http\Request;

class warehouseController extends Controller
{
    public function warehouse():view 
    {
        return view('warehouse');
 
    }
}
