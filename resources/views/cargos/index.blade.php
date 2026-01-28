<x-app-layout>
    <x-slot name="Lista de Cargos"></x-slot>

    <h1>Lista de Cargos</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('cargos.create') }}">Criar Novo Cargo</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cargos as $cargo)
                <tr>
                    <td>{{ $cargo->id }}</td>
                    <td>{{ $cargo->descricao }}</td>
                    <td>
                        <a href="{{ route('cargos.show', $cargo->id) }}">Ver</a>
                        <a href="{{ route('cargos.edit', $cargo->id) }}">Editar</a>
                        <form action="{{ route('cargos.destroy', $cargo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este cargo?')">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>