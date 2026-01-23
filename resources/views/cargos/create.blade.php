<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Cargo</title>
</head>
<body>
    <h1>Criar Novo Cargo</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('cargos.store') }}" method="POST">
        @csrf
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" required>

        <button type="submit">Criar Cargo</button>
    </form>

    <a href="{{ route('cargos.index') }}">Voltar para a lista de cargos</a>
</body>
</html>