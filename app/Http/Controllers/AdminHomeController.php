<?php

namespace App\Http\Controllers;
use illuminate\View\View;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //
    public function index():view 
    {
      return view('Admin.index');
  }
}
