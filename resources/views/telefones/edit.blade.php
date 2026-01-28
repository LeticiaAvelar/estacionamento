<x-app-layout>
    <x-slot name="Editar Telefone"></x-slot>

    <h1>Editar Telefone</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('telefones.update', $telefone->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="numero">Número:</label>
        <input type="text" name="numero" id="numero" value="{{ $telefone->numero }}" required><br><br>

        <label for="tipo">Tipo:</label>
        <select name="tipo" id="tipo" required>
            <option value="">Selecione o tipo</option>
            <option value="residencial" {{ $telefone->tipo == 'residencial' ? 'selected' : '' }}>Residencial</option>
            <option value="comercial" {{ $telefone->tipo == 'comercial' ? 'selected' : '' }}>Comercial</option>
            <option value="celular" {{ $telefone->tipo == 'celular' ? 'selected' : '' }}>Celular</option>
        </select><br><br>

        <button type="submit" class="btn btn-primary">Atualizar Telefone</button>
    </form><br>

    <a href="{{ route('telefones.index') }}">Voltar para a lista de telefones</a>
</x-app-layout>