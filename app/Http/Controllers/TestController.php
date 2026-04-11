<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
//  Q5
    public function index(){
        return "je suis le controller TestController";
    }
    // Q7 --
    public function show(){
        return view('accueil');

    }

    
}
