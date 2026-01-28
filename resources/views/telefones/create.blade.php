<x-app-layout>
    <x-slot name="Adicionar Novo Telefone"></x-slot>

    <h1>Adicionar Novo Telefone</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('telefones.store') }}" method="POST">
        @csrf
        <label for="numero">Número:</label>
        <input type="text" name="numero" id="numero" required><br><br>

        <label for="tipo">Tipo:</label>
        <select name="tipo" id="tipo" required>
            <option value="">Selecione o tipo</option>
            <option value="residencial">Residencial</option>
            <option value="comercial">Comercial</option>
            <option value="celular">Celular</option>
        </select><br><br>

        <button class="btn btn-primary" type="submit">Salvar Telefone</button>
    </form><br>

    <a href="{{ route('telefones.index') }}">Voltar para a lista de telefones</a>
</x-app-layout>