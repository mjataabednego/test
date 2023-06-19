<?php

namespace App\Http\Controllers;
use illuminate\View\View;
use Illuminate\Http\Request;

class blogController extends Controller
{
   
    public function blog():view 
    {
        return view('blog');
 
    }
    public function contact():view 
    {
        return view('contact');
 
    }
    public function team():view 
    {
        return view('team');
 
    }
    public function gallery():view 
    {
        return view('gallery');
 
    }
    public function more():view 
    {
        return view('more');
 
    }
    public function about():view 
    {
        return view('about');
 
    }
}
