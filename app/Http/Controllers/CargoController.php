<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    /**
     * Mostra uma lista dos recursos.
     */
    public function index(Request $request)
    {
        $cargos = Cargo::all();
        return view('cargos.index', compact('cargos'));
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {
        return view('cargos.create');
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(Request $request)
    {
        $cargo = new Cargo(); // Cria uma nova instância do model Cargo
        $cargo->descricao = $request->input('descricao'); // Atribui a descrição do cargo a partir do request
        $cargo->save();

        return redirect()->route('cargos.index')->with('success', 'Cargo criado com sucesso!'); // Redireciona para a lista de cargos com uma mensagem de sucesso
    }

    /**
     * Mostra o recurso especificado.
     */
    public function show(string $id)
    {
        $cargo = Cargo::findOrFail($id);
        return view('cargos.show', compact('cargo'));
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(string $id)
    {
        $cargo = Cargo::findOrFail($id);
        return view('cargos.edit', compact('cargo'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(Request $request, string $id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->descricao = $request->input('descricao');
        $cargo->save();

        return redirect()->route('cargos.index')->with('success', 'Cargo atualizado com sucesso!');
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(string $id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->delete();

        return redirect()->route('cargos.index')->with('success', 'Cargo deletado com sucesso!');
    }
}
