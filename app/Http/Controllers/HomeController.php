<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\View\View;


class HomeController extends Controller
{
    public function hom():view 
    {
        return view('hom');
 
    }
    public function about():view 
    {
        return view('about');
 
    }
    public function service():view 
    {
        return view('service');
 
    }
    public function machine():view 
    {
        return view('machine');
 
    }
    public function warehouse():view 
    {
        return view('warehouse');
 
    }
    public function postharvest():view 
    {
        return view('postharvest');
 
    }
    public function industry():view 
    {
        return view('industry');
 
    }
    public function market():view 
    {
        return view('market');
 
    }
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
    public function sms():view 
    {
        return view('sms');
 
    }
    public function gallery():view 
    {
        return view('gallery');
 
    }

}

