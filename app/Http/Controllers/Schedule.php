<?php

namespace App\Http\Controllers;


use App\Models\scheduleModel;
use Illuminate\Http\Request;

class Schedule extends Controller
{
    public function index() {
        $tasks = scheduleModel::all();
        dd($tasks);
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

    return redirect('/index');
}//Fim do Método
}//Fim da Classe