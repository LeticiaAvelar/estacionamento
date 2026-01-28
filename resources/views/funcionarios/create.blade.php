<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Funcionário</title>
</head>
<body>
    <h1>Criar Novo Funcionário</h1>

    <form action="{{ route('funcionarios.store') }}" method="POST">
        
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="cargo_id">Cargo:</label>
        <select name="cargo_id" id="cargo_id">
            @foreach ($cargos as $cargo)
                <option value="{{ $cargo->id }}">{{ $cargo->nome }}</option>
            @endforeach
        </select><br><br>

        <label for="salario">Salário:</label>
        <input type="number" name="salario" id="salario" step="0.01"><br><br>

        <label for="telefone_id">Telefone:</label>
        <select name="telefone_id" id="telefone_id">
            @foreach ($telefones as $telefone)
                <option value="{{ $telefone->id }}">{{ $telefone->numero }}</option>
            @endforeach
        </select><br><br>

        <label for="hora_entrada">Hora de Entrada:</label>
        <input type="time" name="hora_entrada" id="hora_entrada"><br><br>

        <label for="hora_saida">Hora de Saída:</label>
        <input type="time" name="hora_saida" id="hora_saida"><br><br>

        <button type="submit">Criar Funcionário</button>
    </form>
</body>
</html>