<x-app-layout>
    <x-slot name="Criar Novo Funcionário"></x-slot>

    <h1>Funcionários</h1>

    @if (session('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('funcionarios.create') }}">Criar Novo Funcionário</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
                <tr>
                    <td>{{ $funcionario->id }}</td>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->email }}</td>
                    <td>
                        <a href="{{ route('funcionarios.show', $funcionario->id) }}">Ver</a>
                        <a href="{{ route('funcionarios.edit', $funcionario->id) }}">Editar</a>
                        <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este funcionário?')">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>