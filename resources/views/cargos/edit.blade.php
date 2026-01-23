<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cargo</title>
</head>
<body>
    <h1>Editar Cargo</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('cargos.update', $cargo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" value="{{ $cargo->descricao }}" required>

        <button type="submit" class="btn btn-primary">Atualizar Cargo</button>
    </form>

    <a href="{{ route('cargos.index') }}">Voltar para a lista de cargos</a>
</body>
</html>