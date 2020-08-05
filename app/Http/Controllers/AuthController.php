<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create(){
        return view('register');
    }

    public function read(Request $request){

        $firstname = $request->input('firstname');
        $lastname  = $request->input('lastname');

        $nama = [ 'first' => $firstname,
                  'last'  => $lastname, 
                ];
        
        return view('welcome1', $nama);
    }
}
