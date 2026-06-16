<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Oficinas</title>
</head>
<body>
    <h1>Cadastro de Oficinas</h1>
    
    <form action="/pw3_laravel_atividade/public/oficinas" method="post">
        @csrf
        <label for="nome_oficina">Nome da Oficina</label><br>
        <input type="text" id="nome_oficina" name="nome_oficina" required><br>

        <label for="professor_responsavel">Professor Responsável:</label><br>
        <input type="text" id="professor_responsavel" name="professor_responsavel" required><br>

        <label for="carga_horaria">Carga Horária</label><br>
        <input type="number" id="carga_horaria" name="carga_horaria" required><br>

        <label for="turno">Turno:</label><br>
        <input type="text" name="turno" id="turno" required><br><br>

        <button type="submit">Enviar</button>
    </form> <h2>Oficinas Cadastradas</h2>

    @if ($oficinas->isEmpty())
        <p>Nenhuma oficina cadastrada</p>
    @else
        <ul>
            @foreach ($oficinas as $oficina)
                <li>
                    <strong>Oficina:</strong> {{ $oficina->nome_oficina }}<br>
                    <strong>Professor responsável:</strong> {{ $oficina->professor_responsavel }}<br>
                    <strong>Carga horária:</strong> {{ $oficina->carga_horaria }}<br>
                    <strong>Turno:</strong> {{ $oficina->turno }}<br><br>
                </li>
            @endforeach
        </ul>
    @endif </body>
</html>