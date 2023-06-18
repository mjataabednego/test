<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\View\View;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
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
    public function more():view 
    {
        return view('more');
 
    }
    public function ordermachine():view 
    {
        return view('ordermachine');
 
    }
    public function rent():view 
    {
        return view('rent');
 
    }
    public function pay():view 
    {
        return view('pay');
 
    }
    public function log():view
    {
        return view('log');
    }


}
