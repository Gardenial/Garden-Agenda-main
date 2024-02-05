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
            background-color: #333;
            color: #fff;
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

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }

        .form-container {
            background-color: rgba(106, 212, 106, 0.568);
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
            <h1 class="mb-3">Agenda</h1>
            <div class="form-container">
                <form method="get" action="/schedule/salvar">
                    @csrf
                    <div class="mb-3" style="margin-top: 20px;"><label for="title"
                            class="form-label">Título:</label>
                        <input type="text" class="form-control" name="titulo"
                            style="background-color: rgba(255, 255, 255, 0.2);color: #fff;border: none;border-radius: 5px;padding: 10px;width: 100%;">
                    </div>

                    <div class="mb-3" style="margin-top: 20px;"><label for="start_time" class="form-label">Hora de
                            Início:</label>
                        <input type="datetime-local" class="form-control" name="start_time"
                            style="background-color: rgba(255, 255, 255, 0.2);color: #fff;border: none;border-radius: 5px;padding: 10px;width: 100%;">
                    </div>

                    <div class="mb-3" style="margin-top: 20px;"><label for="end_time" class="form-label">Hora de
                            Término:</label>
                        <input type="datetime-local" class="form-control" name="end_time"
                            style="background-color: rgba(255, 255, 255, 0.2);color: #fff;border: none;border-radius: 5px;padding: 10px;width: 100%;">
                    </div>

                    <button type="submit" class="btn btn-primary"
                        style="background-color: #4caf50;color: #fff;border: none;border-radius: 5px;padding: 10px;width: 100%;">Adicionar
                        Tarefa</button>

                        <br>
                        <br>
                        
                    <a href="/schedule"><button type="submit" class="btn btn-primary"
                    style="background-color: #4caf50;color: #fff;border: none;border-radius: 5px;padding: 10px;width: 100%;">Consultar Tarefas</button>
                    </a>
                        
                </form>
            </div>
        </div>
</body>

</html>
