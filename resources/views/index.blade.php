<x-app-layout>
    <x-slot name="Página Inicial"></x-slot>
    
    <a href="{{ route('cargos.index') }}">Ir para cadastro de cargos</a>
    <br>
    <a href="{{ route('funcionarios.index') }}">Ir para cadastro de funcionários</a>
    <br>
    <a href="{{ route('telefones.index') }}">Ir para cadastro de telefones</a>
</x-app-layout>
