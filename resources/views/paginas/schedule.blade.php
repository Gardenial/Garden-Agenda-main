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
                                        <td><a id="exc" href="/excluir">Excluir</a></td> <!-- Link para excluir a tarefa. -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </x-layout>
