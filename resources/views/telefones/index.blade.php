<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Telefones</title>
</head>
<body>
    <h1>Lista de Telefones</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('telefones.create') }}">Adicionar Novo Telefone</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($telefones as $telefone)
                <tr>
                    <td>{{ $telefone->id }}</td>
                    <td>{{ $telefone->numero }}</td>
                    <td>{{ $telefone->tipo }}</td>
                    <td>
                        <a href="{{ route('telefones.show', $telefone->id) }}">Ver</a>
                        <a href="{{ route('telefones.edit', $telefone->id) }}">Editar</a>
                        <form action="{{ route('telefones.destroy', $telefone->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este telefone?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>