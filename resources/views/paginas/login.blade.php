<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  Bootstrap Css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Bootstrap Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <title>Login</title>
</head>

<body>
    <x-layout title="Formulário Login">
        <div class="container">
            @foreach ($dados as $dado)
                {{-- <li class="list-group-item">{{ $dado->nome }}</li>
            <br>
            <li class="list-group-item">{{ $dado->senha }}</li>
            <br><br> --}}
            @endforeach
        </div>

        <br>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <form action="login/salvar">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="nome" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>

                        {{-- Levando para a tela de Entrar --}}
                        <a href="/index">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </a>

                        {{-- Levando para a tela de Cadastro --}}
                        <a href="/cadastrar">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </x-layout>
</body>
