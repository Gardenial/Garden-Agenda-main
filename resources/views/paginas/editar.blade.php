<x-layout title="Editar">

    <form action="../atualizar/{{ $dado->id }}" method="get" class="container mt-5">
        <div class="mb-3">
            <label for="titulo" class="form-label">Nome:</label>
            <input type="text" id="titulo" name="titulo" value="{{ $dado->titulo }}" class="form-control"
                required>
        </div>
        <div class="mb-3">
            <label for="datetime-local" class="form-label">Início da Tarefa:</label>
            <input type="datetime-local" id="start_time" name="start_time" value="{{ $dado->start_time }}"
                class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="datetime-local" class="form-label">Fim da Tarefa:</label>
            <input type="datetime-local" id="end_time" name="end_time" value="{{ $dado->end_time }}"
                class="form-control" required>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-outline-primary">Atualizar</button>
            <a href="../schedule" class="btn btn-outline-primary ">Voltar</a>
        </div>
        <!-- Botão Excluir com modal -->
        <button type="button" class="btn btn-outline-primary mt-3" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Excluir
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Registro?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir o cliente: {{ $dado->nome }}?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                        <a type="button" class="btn btn-outline-primary" href="/excluir/{{ $dado->id }}">Sim</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- Fazendo a estilização da página --}}
    <style>
        body {
            background-color: #003f3a;
        }

        .container {
            background-color: rgb(32, 32, 36);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }

        .form-label {
            font-weight: bold;
            color: white;
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid rgb(61, 99, 117);
            padding: 10px;
            font-size: 16px;
            width: 100%;
        }

        .form-control:focus {
            border-color: #4caf50;
            box-shadow: 0 0 3px 0 #4caf50;
        }

        .btn {
            border: solid 2px #4caf50;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #4caf50;
            color: #fff;
            border: solid 2px #4caf50;
        }

        .btn-outline-primary {
            padding: 8px 20px;
            border: 2px solid #4caf50;
            color: #4caf50;
        }

        .btn-outline-primary:hover {
            background-color: #4caf50;
            color: #fff;
            border: solid 2px #4caf50
        }

        .modal {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            max-width: 400px;
            margin: 20px auto;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-title {
            color: #4caf50;
        }

        .btn-secondary {
            background-color: rgb(25, 59, 27);
            border: none;
            color: #ffffff;
        }

        .btn-secondary:hover {
            background-color: #1d5c49;
            border: none;
        }
    </style>
</x-layout>
