<x-app-layout>
    <x-slot name="1"></x-slot>

    <h1>Visualizar Funcionário</h1>
    <p><strong>ID:</strong> {{ $funcionario->id }}</p>
    <p><strong>Nome:</strong> {{ $funcionario->nome }}</p>
    <p><strong>Email:</strong> {{ $funcionario->email }}</p>
    <p><strong>Cargo:</strong> {{ $funcionario->cargo->descricao }}</p>
    <p><strong>Salário:</strong> {{ $funcionario->salario }}</p>
    <p><strong>Telefone:</strong> {{ $funcionario->telefone->numero }}</p>
    <p><strong>Hora de Entrada:</strong> {{ $funcionario->hora_entrada }}</p>
    <p><strong>Hora de Saída:</strong> {{ $funcionario->hora_saida }}</p>

    <a href="{{ route('funcionarios.index') }}">Voltar para a lista de funcionários</a>
</x-app-layout>
