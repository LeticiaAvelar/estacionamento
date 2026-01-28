<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Funcionário</title>
</head>
<body>
    <h1>Visualizar Funcionário</h1>
    <p><strong>ID:</strong> {{ $funcionario->id }}</p>
    <p><strong>Nome:</strong> {{ $funcionario->nome }}</p>
    <p><strong>Email:</strong> {{ $funcionario->email }}</p>
    <p><strong>Cargo:</strong> {{ $funcionario->cargo->nome }}</p>
    <p><strong>Salário:</strong> {{ $funcionario->salario }}</p>
    <p><strong>Telefone:</strong> {{ $funcionario->telefone->numero }}</p>
    <p><strong>Hora de Entrada:</strong> {{ $funcionario->hora_entrada }}</p>
    <p><strong>Hora de Saída:</strong> {{ $funcionario->hora_saida }}</p>

    <a href="{{ route('funcionarios.index') }}">Voltar para a lista de funcionários</a>
</body>
</html>