<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatianController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function profile($username,$age)
    {
        return view('profile',['un'=>$username,'ag'=>$age]);
    }
}
