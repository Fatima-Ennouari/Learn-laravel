<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller {
    private $file = 'users.json';
//Read json
    private function getUsers(){
        if(!Storage::exists($this->file)){
            Storage::put($this->file, json_encode([]));
        }
        return json_encode(Storage::get($this->file), true);
     }


//Save json

    private function saveUsers($users){
        Storage::put($this->file, json_encode($users, JSON_PRETTY_PRINT));

    }
//index
    public function index(){
        $users =$this->getUsers();
        return view ('users.index', compact('users'));
}
//create 
    public function create(){
        return view ('users.create');
}
//store
    public function store(Request $request){
        $request -> validate([
            'nom'=> 'required',
            'email'=> 'required|email',
            'age'=> 'required|numeric|min:1'
        ]);
        $users = $this-> getUsers();
        $newUser =[
            'id' => time(),
            'nom' => $request->nom,
            'email' => $request->email,
            'age' => $request->age
        ];
        $users[]= $newUser;
        $this->saveUsers($users);
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
    
}