<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
//  Q5
    public function index(){
        return "je suis le controller TestController";
    }
    public function afficher(Request $request){
        return view('welcome', [
            'name'=> $request->name

        ]);
    }
    // Q7 --
    public function show(){
        return view('accueil');

    }
    // public function view(Request $request){
    //     $name = $request->name;
    //     $languages = ['PHP', 'LARAVEL', 'SYMFONY','MY SQL', 'REACT'];
    //     return view('accueil', [
    //         'name' => $name,
    //         'languages' => $languages
    //     ]);
    // }
    public function view(Request $request){
        $name = 'fatima';
         $languages = [];
        // $languages = ['PHP', 'LARAVEL', 'SYMFONY','MY SQL', 'REACT'];
        return view('accueil',compact('name', 'languages'));
        }

}
