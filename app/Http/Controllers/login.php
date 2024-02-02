<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\loginModel;
class login extends Controller
{
    public function login()
    {
        $dados = loginModel::all();

        return view('paginas.login')->With('dados', $dados);
        
    }//Fim do Método login

    public function store(Request $request)
    {
        $nomeUsuario     = $request->input('nome'); //Coletando dados do formulário
        $senhaUsuario = $request->input('senha');

        $model = new loginModel();
        $model -> nome       = $nomeUsuario;
        $model -> senha   = $senhaUsuario;
        $model -> save(); //Armazenar os dados no BD

        return redirect('/index');
        
    }//Fim do Método store

    
}//Fim da classe
