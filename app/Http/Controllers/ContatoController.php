<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request){

        // $contato = new SiteContato();

        //Retorna o fillable definido do model SiteContato
        // $contato->create($request->all());

        return view('site.contato');

    }

    public function salvar(Request $request){

        //Validação dos dados do formulário
        $request->validate([
            'nome'     => 'required|min:3|max:20', //min 3 caracteres e máximo 20,
            'telefone' => 'required',
            'email'    => 'required',
            'contato'  => 'required',
            'mensagem' => 'required'
        ]);
        // SiteContato::create($request->all());
        
    }
}
