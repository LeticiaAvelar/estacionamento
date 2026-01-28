<x-app-layout>
    <x-slot name="Visualizar Telefone"></x-slot>

    <h1>Visualizar Telefone</h1>

    <p><strong>ID:</strong> {{ $telefone->id }}</p>
    <p><strong>Número:</strong> {{ $telefone->numero }}</p>
    <p><strong>Tipo:</strong> {{ $telefone->tipo }}</p>

    <a href="{{ route('telefones.index') }}">Voltar para a lista de telefones</a>
</x-app-layout>