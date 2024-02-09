<x-layout title="Agenda">
    <style>
        body{
            background-color: #2c5045;
            color: #fff;
        }
        #edit{
            color: #68d468;
        }
        #exc{
            color: #df2361;
        }
        #Voltar{
            color: white;
            background-color: #68d468;
            border: solid 2px #68d468;
            border-radius: 0%;
            padding-left: 3%;
            padding-right: 3%;
            
        }
        #Voltar:hover{
            color: #68d468;
            background-color: #ffffff00;
            border-color: #68d468;
            border:  solid 2px;
            
        }

    </style>
    
    <div class="container py-5">
        <div class="row justify-content-center">
 
            <!-- Essa é uma coluna com largura que se adapta ao tamanho da tela. -->
            <div class="col-md-8">
                <div class="card bg-dark">
                    <div class="card-header text-center text-white">
                        Tarefas e Agendamentos
                    </div>
                    <div class="card-body">
                        <table class="table table-dark table-bordered">
 
                            <!-- Esse é o cabeçalho da tabela com os nomes das colunas. -->
                            <thead style="text-align: center">
                                <tr>
                                    <th>Tarefa</th>
                                    <th>Data de Agendamento</th>
                                    <th>Data Final</th>
                                    <th colspan="2" >Opções</th>
                                    
                                </tr>
                            </thead>
 
                            <!-- tabela com um loop para exibir cada tarefa. -->
                            <tbody style="text-align: center">
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $task->titulo }}</td> <!-- Título da tarefa. -->
                                        <td>{{ $task->start_time }}</td> <!-- Hora de início da tarefa. -->
                                        <td>{{ $task->end_time }}</td> <!-- Hora final da tarefa. -->
                                        <td><a id="edit" href="editar/{{$task->id}}">Editar</a></td> <!-- Link para editar a tarefa. -->
                                        <td><a id="exc" href="/excluir/{{$task->id }}">Excluir</a></td> <!-- Link para excluir a tarefa. -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a id="Voltar"style="margin: 5%" href="/index" class="btn btn-secondary">Voltar</a>

                    <p class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-clipboard2" viewBox="0 0 16 16">
                            <path d="M3.5 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5H12a.5.5 0 0 1 0-1h.5A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1H4a.5.5 0 0 1 0 1z"/>
                            <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5"/>
                        </svg>
                        Total de tarefas: {{ $tasks->count() }}
                    </p>
                </div>
            </div>
        </div>
    </div>
 </x-layout>
