<x-app-layout>
    <x-slot name="Criar Novo Funcionário"></x-slot>

    <h1>Criar Novo Funcionário</h1>

    <form action="{{ route('funcionarios.store') }}" method="POST">
        
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="cargo_id">Cargo:</label>
        <select name="cargo_id" id="cargo_id">
            @foreach ($cargos as $cargo)
                <option value="{{ $cargo->id }}">{{ $cargo->descricao }}</option>
            @endforeach
        </select><br><br>

        <label for="salario">Salário:</label>
        <input type="number" name="salario" id="salario" step="0.01"><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" placeholder="(XX) XXXXX-XXXX" data-inputmask-mask="(99) 99999-9999" class="form-control" required><br><br>

        <label for="hora_entrada">Hora de Entrada:</label>
        <input type="time" name="hora_entrada" id="hora_entrada"><br><br>

        <label for="hora_saida">Hora de Saída:</label>
        <input type="time" name="hora_saida" id="hora_saida"><br><br>

        <button type="submit">Criar Funcionário</button>
    </form>
</x-app-layout>