<x-app-layout>
    <x-slot name="Editar Funcionário"></x-slot>

    <h1>Editar Funcionário</h1>
    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $funcionario->nome }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $funcionario->email }}" required><br><br>

        <label for="cargo_id">Cargo:</label>
        <select name="cargo_id" id="cargo_id">
            @foreach ($cargos as $cargo)
                <option value="{{ $cargo->id }}" {{ $funcionario->cargo_id == $cargo->id ? 'selected' : '' }}>{{ $cargo->descricao }}</option>
            @endforeach
        </select><br><br>

        <label for="salario">Salário:</label>
        <input type="number" name="salario" id="salario" step="0.01" value="{{ $funcionario->salario }}"><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="{{ $funcionario->telefone->numero }}" required><br><br>

        <label for="hora_entrada">Hora de Entrada:</label>
        <input type="time" name="hora_entrada" id="hora_entrada" value="{{ $funcionario->hora_entrada }}"><br><br>

        <label for="hora_saida">Hora de Saída:</label>
        <input type="time" name="hora_saida" id="hora_saida" value="{{ $funcionario->hora_saida }}"><br><br>

        <button type="submit" class="btn btn-primary">Atualizar Funcionário</button>
        
    </form><br><br>

        <a href="{{ route('funcionarios.index') }}">Voltar para a lista de funcionários</a>
</x-app-layout>