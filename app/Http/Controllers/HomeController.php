<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phplesson;
use App\Jslesson;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function page(){
        $data = Phplesson::all();
        return view('php',compact('data'));
    }

    public function page1(){
        $data = Jslesson::all();
        return view('js',compact('data'));
    }
}
