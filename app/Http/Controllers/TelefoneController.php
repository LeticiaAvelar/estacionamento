<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefone;

class TelefoneController extends Controller
{
    /**
     * Mostra uma lista dos recursos.
     */
    public function index()
    {
        $telefones = Telefone::all();
        return view('telefones.index', compact('telefones'));
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {
        return view('telefones.create');
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(Request $request)
    {
        $telefone = new Telefone(); // Cria uma nova instância do modelo Telefone
        $telefone->numero = $request->input('numero'); // Atribui o número do telefone a partir do request
        $telefone->save();

        return redirect()->route('telefones.index')->with('success', 'Telefone criado com sucesso!'); // Redireciona para a lista de telefones com uma mensagem de sucesso
    }

    /**
     * Mostra o recurso especificado.
     */
    public function show(string $id)
    {
        $telefone = Telefone::findOrFail($id);
        return view('telefones.show', compact('telefone'));
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(string $id)
    {
        $telefone = Telefone::findOrFail($id);
        return view('telefones.edit', compact('telefone'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(Request $request, string $id)
    {
        $telefone = Telefone::findOrFail($id); // Encontra o telefone pelo ID
        $telefone->numero = $request->input('numero'); // Atualiza o número do telefone a partir do request
        $telefone->save();

        return redirect()->route('telefones.index')->with('success', 'Telefone atualizado com sucesso!'); // Redireciona para a lista de telefones com uma mensagem de sucesso
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(string $id)
    {
        $telefone = Telefone::findOrFail($id);
        $telefone->delete(); // Deleta o telefone (soft delete)

        return redirect()->route('telefones.index')->with('success', 'Telefone deletado com sucesso!'); // Redireciona para a lista de telefones com uma mensagem de sucesso
    }
}
