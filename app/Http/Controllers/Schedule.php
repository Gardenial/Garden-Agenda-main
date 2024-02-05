<?php

namespace App\Http\Controllers;


use App\Models\scheduleModel;
use Illuminate\Http\Request;

class Schedule extends Controller
{
    public function index() {
        $tasks = scheduleModel::all();
        return view('paginas.schedule', compact('tasks'));
}//Fim do Método

public function store(Request $request) {

    $titulo         = $request->input('titulo');
    $inicioTarefa   = $request->input('start_time');
    $fimTarefa      = $request->input('end_time');



    $newTask = new ScheduleModel();
    $newTask->titulo        = $titulo; 
    $newTask->start_time    = $inicioTarefa; 
    $newTask->end_time      = $fimTarefa;
    $newTask ->save();

    $tasks = scheduleModel::all();
    return view('paginas.schedule', compact('tasks'))->with('success', 'Tarefa criada com sucesso!');
}//Fim do Método

public function consultar()
{
    return view('paginas.schedule');
} // Fim do método Consultar
}//Fim da Classe