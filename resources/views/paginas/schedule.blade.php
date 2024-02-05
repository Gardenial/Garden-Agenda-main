<x-layout title="Agenda" style="background-color: #333; color: #fff;">
    <div class="container py-5">
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark">
                    <div class="card-header text-center text-white">Tarefas e Agendamentos</div>
                    <div class="card-body">
                        <table class="table table-dark table-bordered">
                            <thead>
                                <tr>
                                    <th>Tarefa</th>
                                    <th>Data de Agendamento</th>
                                    <th>Data Final</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $task->titulo }}</td>
                                        <td>{{ $task->start_time }}</td>
                                        <td>{{ $task->end_time }}</td>
                                        <td><a href="/editar">Editar</a></td>
                                        <td><a href="/excluir">excluir</a></td>
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
