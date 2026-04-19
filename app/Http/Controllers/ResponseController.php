<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function textResponse()
    {
        return "This is a plain text response.";
    }
    
    public function viewResponse()
    {
        return view('test');
    }

    public function arrayResponse()
    {
        return [
            'name' => 'Fatima',
            'age' => 20,
            'city' => 'casablanca'];
    }

    public function jsonResponse()
    {
        return response()->json([
            "success" => true,
            "message" => "JSON response works!"
        ], 200);
    }

    public function jsonWithHeader()
    {
        return response()->json([
            "data" => "Header test"
        ])->header('Author', 'Fatima');
    }

    public function redirectToRoute()
    {
        return redirect()->route('response/text');
    }

    public function redirectToMethod()
    {
        return redirect()->action([self::class, 'jsonResponse']);
    }

    public function redirectExternal()
    {
        return redirect()->away('https://www.google.com');
    }
}
