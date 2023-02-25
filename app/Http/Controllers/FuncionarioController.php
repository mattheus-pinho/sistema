<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{

    public function autenticarFuncionario(Request $request){
        // Validar os campos obrigatórios do formulário de login
        $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required']
        ]);

        // Tentar encontrar um funcionário com o email informado
        $funcionario = Funcionarios::where('email', $request->email)->first();

        // Verificar se o funcionário foi encontrado e a senha está correta
        if ($funcionario && Hash::check($request->senha, $funcionario->senha)) {
            // Autenticar o funcionário e redirecionar para a página principal do sistema
            Auth::login($funcionario);
            return redirect('teste');
        } else {
            // Caso contrário, exibir mensagem de erro e redirecionar para o formulário de login
            return back()->withErrors(['email' => 'E-mail ou senha inválidos.'])->withInput();
        }
    }

    public function index()
    {
        $funcionarios = Funcionarios::all();
        return view('funcionarios.index', ['funcionarios' => $funcionarios]);
    }

    public function create()
    {
        return view('funcionarios.create');
    }

    public function store(Request $request)
    {
        $funcionario = Funcionarios::create([
            'nome' => $request->input('nome'),
            'senha' => bcrypt($request->input('senha')),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone')
        ]);
        return redirect('/');
    }

    public function show(Funcionarios $funcionario)
    {
        return view('funcionarios.show', ['funcionario' => $funcionario]);
    }

    public function edit(Funcionarios $funcionario)
    {
        return view('funcionarios.edit', ['funcionario' => $funcionario]);
    }

    public function update(Request $request, Funcionarios $funcionario)
    {
        $funcionario->update([
            'nome' => $request->input('nome'),
            'senha' => bcrypt($request->input('senha')),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone')
        ]);
        return redirect()->route('funcionarios.show', $funcionario->id);
    }

    public function destroy(Funcionarios $funcionario)
    {
        $funcionario->delete();
        return redirect()->route('funcionarios.index');
    }
}
