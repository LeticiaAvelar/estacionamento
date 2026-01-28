<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sistema de Estacionamento' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        {{-- Navigation content --}}
        <div class="container-fluid">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <a href="http://localhost:8000">Início</a>
                    </div>
                    <div class="col">
                        <a href="http://localhost:8000/cargos">Cargos</a>
                    </div>
                    <div class="col">
                        <a href="http://localhost:8000/funcionarios">Funcionários</a>
                    </div>
                    <div class="col">
                        <a href="http://localhost:8000/telefones">Telefones</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            {{-- The main content goes here --}}
            {{ $slot }}
        </div>
    </main>
</body>

</html>