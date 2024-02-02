<x-layout title="Teste">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tarefas e Agendamentos</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tarefa</th>
                                <th>Descrição</th>
                                <th>Data de Agendamento</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->titulo }}</td>
                                    <td>{{ $task->start_time }}</td>
                                    <td></td>
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