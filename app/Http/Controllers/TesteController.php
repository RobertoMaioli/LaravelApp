<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $params1, int $params2){
        // echo "Soma de $params1 + $params2: ".($params1+$params2);

        //PASSANDO PARÂMETROS PARA VIEW
        
        //return view('site.test', ['params1' => $params1, 'params2' => $params2]); //array associativo
        //return view('site.test')->with('params1', $params1)->with('params2', $params2);
        return view('site.test', compact('params1','params2')); //compact

    }
}
