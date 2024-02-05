<?php

namespace App\Http\Controllers;
use App\Models\cadastrarModel;
use Illuminate\Http\Request;

class cadastrar extends Controller
{
    public function cadastrar()
    {
        $dados = cadastrarModel::all();

        return view('paginas.cadastrar')->With('dados', $dados);
        
    }//Fim do Método cadastrar
}
