<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Telefone</title>
</head>
<body>
    <h1>Editar Telefone</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('telefones.update', $telefone->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="numero">Número:</label>
        <input type="text" name="numero" id="numero" value="{{ $telefone->numero }}" required><br><br>

        <label for="tipo">Tipo:</label>
        <select name="tipo" id="tipo" required>
            <option value="">Selecione o tipo</option>
            <option value="residencial" {{ $telefone->tipo == 'residencial' ? 'selected' : '' }}>Residencial</option>
            <option value="comercial" {{ $telefone->tipo == 'comercial' ? 'selected' : '' }}>Comercial</option>
            <option value="celular" {{ $telefone->tipo == 'celular' ? 'selected' : '' }}>Celular</option>
        </select><br><br>

        <button type="submit">Atualizar Telefone</button>
    </form>

    <a href="{{ route('telefones.index') }}">Voltar para a lista de telefones</a>
</body>
</html>