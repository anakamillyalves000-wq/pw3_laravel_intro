<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros - Atividade Laravel</title>
</head>
<body>
    <h1>Cadastro de Livros</h1>

    @if(session('sucesso'))
        <p style="color: green;">{{ session('sucesso') }}</p>
    @endif

        <form action="{{ url('livros') }}" method="POST"> 
        @csrf

        <label for="titulo">Título do Livro</label><br>
        <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}" required><br><br>

        <label for="autor">Autor</label><br>
        <input type="text" id="autor" name="autor" value="{{ old('autor') }}" required><br><br>

        <label for="ano_publicacao">Ano de Publicação</label><br>
        <input type="number" id="ano_publicacao" name="ano_publicacao" min="1920" max="2030" placeholder="Ex:1987" required><br><br>

        <button type="submit">Salvar Livro</button>
    </form>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <hr>

    <h2>Lista de Livros</h2>

    @if($livros->isEmpty())
   
    @else
        <table border="1" style="width: 100%; text-align: left;">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ano</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                    <tr>
                        <td>{{ $livro->titulo }}</td>
                        <td>{{ $livro->autor }}</td>
                        <td>{{ $livro->ano_publicacao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>