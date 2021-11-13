<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class parteuno extends Controller
{
    

    public function pipis()
    {
     return view ('ai');
    }

    public function bread()
    {
     return view ('Trabajo2');
    }

    public function bread2()
    {
     return view ('Trabajo3');
    }

    public function pepito(){
        return view('naranja');
    }

    public function tomao(){
        return view('Reg');
    }

    public function tomato(Request $request){
        $password = $request ->input('username');
        $username = $request -> input('password');
        return view('login',['password'=>$password ,'username'=>$username]);
    }
}