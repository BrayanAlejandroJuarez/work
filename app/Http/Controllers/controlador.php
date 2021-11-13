<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    public function Class(){
        return view('welcome');
    }
    
    public function bread()
    {
     return view ('Trabajo');
    }

    public function Queso($base=5,$altura=6,$rad=7,$basar=4){
    return view('panqueque',array(
        'based'=>$base,
        'based2'=>$basar,
        'hei'=>$altura,
        'radi'=>$rad,
    ));
    }
    
    public function Patata(){
        $age=17;
        $hora=40;
        $paga=1000;
        $basap=7;
        return view('a')
        ->with('age1', $age)
        ->with('hora', $hora)
        ->with('plata', $paga)
        ->with('po', $basap);
    }

    public function electric($A,$salario,$a1,$a2,$a3,$a4,$a5){
    return view('p',[
        'A'=>$A,
        'salario'=>$salario,
        'array'=>$array=array($a1,$a2,$a3,$a4,$a5)
    ]);
    }
}