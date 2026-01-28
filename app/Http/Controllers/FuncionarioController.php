<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use App\Models\Cargo;
use App\Models\Telefone;

class FuncionarioController extends Controller
{
    /**
     * Mostra a lista de recursos.
     */
    public function index(Request $request) // O request pode ser usado para filtrar ou paginar
    {
        $funcionarios = Funcionario::all(); // Carrega funcionários com seus cargos e telefones relacionados
        return view('funcionarios.index', compact('funcionarios')); // Passa os funcionários para a view
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {
        $cargos = Cargo::orderBy('descricao')->get(); // Obtém todos os cargos disponíveis
        return view('funcionarios.create', compact('cargos')); // Passa cargos para a view
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(Request $request)
    {
        if (!$request->has('telefone_id')) { # Se não houver telefone_id no request, cria um novo telefone
            if ($request->input('telefone') != '') { # Se o campo telefone não estiver vazio
                $telefone = new Telefone();
                $telefone->numero = $request->input('telefone');
                $telefone->save();
                $request->merge(['telefone_id' => $telefone->id]);
            }
        }

        $funcionario = new Funcionario(); // Cria uma nova instância do modelo Funcionario
        $funcionario->nome = $request->input('nome');
        $funcionario->cargo_id = $request->input('cargo_id');
        $funcionario->salario = $request->input('salario');
        $funcionario->telefone_id = $request->input('telefone_id');
        $funcionario->hora_entrada = $request->input('hora_entrada');
        $funcionario->hora_saida = $request->input('hora_saida');
        $funcionario->email = $request->input('email');
        $funcionario->chave_pix = $request->input('chave_pix');
        $funcionario->save();

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário criado com sucesso!'); // Redireciona para a lista de funcionários com uma mensagem de sucesso
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $funcionario = Funcionario::findOrFail($id);

        return view('funcionarios.show', compact('funcionario')); // Passa o funcionário para a view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funcionario $funcionario)
    {
        $funcionario = Funcionario::findOrFail($funcionario->id);
        $cargos = Cargo::orderBy('descricao')->get(); // Obtém todos os cargos disponíveis
        return view('funcionarios.edit', compact('funcionario', 'cargos')); // Passa o funcionário e cargos para a view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $funcionario->nome = $request->input('nome'); # Atualiza o nome do funcionário a partir do request
        $funcionario->cargo_id = $request->input('cargo_id');
        $funcionario->salario = $request->input('salario');
        $funcionario->hora_entrada = $request->input('hora_entrada');
        $funcionario->hora_saida = $request->input('hora_saida');
        $funcionario->email = $request->input('email');
        $funcionario->chave_pix = $request->input('chave_pix');
        $funcionario->save();
        $telefone = Telefone::find($funcionario->telefone_id);
        if ($telefone) {
            $telefone->numero = $request->input('telefone');
            $telefone->save();
        }

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário atualizado com sucesso!'); // Redireciona para a lista de funcionários com uma mensagem de sucesso
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete(); // Remove o funcionário do banco de dados

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário removido com sucesso!'); // Redireciona para a lista de funcionários com uma mensagem de sucesso
    }
}
