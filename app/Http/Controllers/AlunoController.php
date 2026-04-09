<?php

namespace App\Http\Controllers;

use App\Models\Aluno;   
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::query()
            ->latest()
            ->get();

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'integer', 'min:1'],
            'telefone' => ['nullable', 'string', 'min:10'],
            'email' => ['required', 'string', 'email'],
            'data_nascimento' => ['nullable', 'date'],
            'status' => ['required', 'in:ativo,inativo'],
        ]);

        Aluno::create($dados);
        return redirect()
            ->route('alunos.index')
            ->with('success', 'Aluno criado com sucesso.');
    }

    public function edit(Aluno $aluno)
    {
        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, Aluno $aluno)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'min:11'],
            'telefone' => ['nullable', 'string', 'min:10'],
            'email' => ['required', 'string', 'email'],
            'data_nascimento' => ['nullable', 'date'],
            'status' => ['required', 'in:ativo,inativo'],
        ]);

        $aluno->update($dados);
        return redirect()
            ->route('alunos.index')
            ->with('success', 'Aluno atualizado com sucesso.');
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return redirect()
            ->route('alunos.index')
            ->with('success', 'Aluno removido com sucesso.');
    }
}
