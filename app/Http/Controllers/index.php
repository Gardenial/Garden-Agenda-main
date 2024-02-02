<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\indexModel;
class index extends Controller
{
    public function index()
    {
        $dados = indexModel::all();

        return view('paginas.index')->with('dados', $dados);
    }
}
