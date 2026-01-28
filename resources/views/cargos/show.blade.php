<x-app-layout>
    <x-slot name="Detalhes do Cargo"></x-slot>

    <h1>Detalhes do Cargo</h1>

    <p><strong>ID:</strong> {{ $cargo->id }}</p>
    <p><strong>Descrição:</strong> {{ $cargo->descricao }}</p>

    <a href="{{ route('cargos.index') }}">Voltar para a lista de cargos</a>
</x-app-layout>