<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'S',
                'ddd' => '11'
            ],
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S',
                'ddd' => '36'
            ]
        ];

        /*Operador ternário
            $msg = echo isset($fornecedores[0]['nome']) ? 'Nome existe' : 'Nome não existe';
            echo $msg
        */

        return view('dash.fornecedor.index', compact('fornecedores'));
    }
}
