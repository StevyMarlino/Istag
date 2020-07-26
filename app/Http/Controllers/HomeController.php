<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
    {
        return view('home');
    }

    public function about(){
        return view('istag.about');
    }

    public function courses(){
        return view('istag.courses');
    }

    public function teachers(){

        return view('istag.teachers');
    }

    public function contact(){

        return view('istag.contact');
    }


}
