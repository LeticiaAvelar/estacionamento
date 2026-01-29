<x-app-layout>
    <x-slot name="Lista de Telefones"></x-slot>

    <h1>Lista de Telefones</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('telefones.create') }}">Adicionar Novo Telefone</a>

    <table class="table table-striped table-hover">

        <thead>
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($telefones as $telefone)
                <tr>
                    <td>{{ $telefone->id }}</td>
                    <td>{{ $telefone->numero }}</td>
                    <td>{{ $telefone->tipo }}</td>
                    <td>
                        <button type="button" class="btn btn-secondary"><a href="{{ route('telefones.show', $telefone->id) }}">Ver</a></button>
                        <button type="button" class="btn btn-secondary"><a href="{{ route('telefones.edit', $telefone->id) }}">Editar</a></button>
                        <form action="{{ route('telefones.destroy', $telefone->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este telefone?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>