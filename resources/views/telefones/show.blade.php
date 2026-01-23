<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Telefone</title>
</head>
<body>
    <h1>Visualizar Telefone</h1>

    <p><strong>ID:</strong> {{ $telefone->id }}</p>
    <p><strong>Número:</strong> {{ $telefone->numero }}</p>
    <p><strong>Tipo:</strong> {{ $telefone->tipo }}</p>

    <a href="{{ route('telefones.index') }}">Voltar para a lista de telefones</a>
</body>
</html>