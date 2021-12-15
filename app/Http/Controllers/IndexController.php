<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function services(){
        return view('services');
    }
    public function about_us(){
        return view('about_us');
    }

    public function contact(){
        return view('contact');
    }
}
