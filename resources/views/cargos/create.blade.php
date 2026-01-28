<x-app-layout>
    <x-slot name="Criar Novo Cargo"></x-slot>

    <h1>Criar Novo Cargo</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('cargos.store') }}" method="POST">
        @csrf
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" required><br><br>

        <button class="btn btn-primary" type="submit">Criar Cargo</button>
    </form><br>

    <a href="{{ route('cargos.index') }}">Voltar para a lista de cargos</a>
</x-app-layout>