<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap Css n Js --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: #2c5045;
            color: #fff;
        }


        .form-label {
            font-weight: bold;
            color: rgb(0, 58, 5);
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid rgb(0, 0, 0);
            padding: 10px;
            font-size: 16px;
            width: 100%;
        }

        .form-control:focus {
            border-color: #4caf50;
            box-shadow: 0 0 3px 0 #4caf50;
        }

        .container {
            max-width: 600px;
        }

        .table {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }

        th,
        td {
            border: none;
        }

        th {
            background-color: #4caf50;
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }

        td {
            padding: 10px;
            border-radius: 0 0 5px 5px;
        }

        input {
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }


        .btn-primary {
            width: 100%;
            background-color: #4caf50;
            border-width: 4px;
            border: #4caf50;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #25583600;
            color: #4caf50;
        }

        .form-container {
            background-color: rgb(255, 255, 255);
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
    <title>Garden Agenda</title>
</head>

<body>

    <div class="container mt-5 text-centertcx-centertcx-centertcx-center">
        <div class="container mt-5tcx-centercx-centercx-centertcx-centertcx-center" style="max-width: 600px;">
            <h1 class="mb-3" style="text-align: center">Agenda</h1>
            <div class="form-container">
                <form method="get" action="/schedule/salvar">
                    @csrf
                    <div class="mb-3" style="margin-top: 20px;"><label for="title"
                            class="form-label">Título:</label>
                        <input type="text" class="form-control" name="titulo">
                    </div>

                    <div class="mb-3" style="margin-top: 20px;"><label for="start_time" class="form-label">Hora de
                            Início:</label>
                        <input type="datetime-local" class="form-control" name="start_time">
                    </div>

                    <div class="mb-3" style="margin-top: 20px;"><label for="end_time" class="form-label">Hora de
                            Término:</label>
                        <input type="datetime-local" class="form-control" name="end_time">
                    </div>

                    <button type="submit" class="btn btn-primary">Adicionar
                        Tarefa</button>
                    <br>
                    <br>
                </form>


                <a class="btn btn-primary" href="/schedule">Consultar Tarefas
                </a>
            </div>
        </div>
</body>

</html>
