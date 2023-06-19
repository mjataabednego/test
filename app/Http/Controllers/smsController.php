<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class smsController extends Controller
{
    public function sms():view 
    {
        return view('sms');
 
    }
}
