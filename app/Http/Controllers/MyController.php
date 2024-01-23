<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return view('users.index');
    }
    public function aboutUs(){
        return view('users.aboutus');
    }
    public function contactUs(){
        return view('users.contactus');
    }
}
