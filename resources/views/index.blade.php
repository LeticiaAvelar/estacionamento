@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Estacionamento</title>
</head>
<body>
    <a href="{{ route('cargos.index') }}">Ir para cadastro de cargos</a>
    <br>
    <a href="{{ route('funcionarios.index') }}">Ir para cadastro de funcionários</a>
    <br>
    <a href="{{ route('telefones.index') }}">Ir para cadastro de telefones</a>
</body>
</html>