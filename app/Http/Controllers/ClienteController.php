<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $clientes = Cliente::all();

    return view('clientes.index', compact('clientes'));
}

public function create()
{
    return view('clientes.create');
}

public function store(Request $request)
{
    $cliente = Cliente::create([
        'nome' => $request->input('nome'),
        'telefone' => $request->input('telefone'),
        'cpf' => $request->input('cpf'),
        'endereco' => $request->input('endereco')
    ]);

    return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
}

public function show($id)
{
    $cliente = Cliente::findOrFail($id);

    return view('clientes.show', compact('cliente'));
}

public function edit($id)
{
    $cliente = Cliente::findOrFail($id);

    return view('clientes.edit', compact('cliente'));
}

public function update(Request $request, $id)
{
    $cliente = Cliente::findOrFail($id);

    $cliente->update([
        'nome' => $request->input('nome'),
        'telefone' => $request->input('telefone'),
        'cpf' => $request->input('cpf'),
        'endereco' => $request->input('endereco')
    ]);

    return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
}

public function destroy($id)
{
    $cliente = Cliente::findOrFail($id);

    $cliente->delete();

    return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
}

}
