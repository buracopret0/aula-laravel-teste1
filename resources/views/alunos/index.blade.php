@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
    <h1>Lista de Alunos</h1>

    <div class="actions">
        <a href="{{ route('alunos.create') }}" class="btn">Novo aluno</a>
    </div>

    @if ($alunos->isEmpty())
        <p>Nenhum aluno cadastrado ainda.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->cpf }}</td>
                        <td>{{ $aluno->telefone }}</td>
                        <td>{{ $aluno->email }}</td>
                        <td>
                            <a href="{{ route('alunos.edit', $aluno) }}" class="btn btn-warning">Editar</a>
                            <form
                                action="{{ route('alunos.destroy', $aluno) }}"
                                method="POST"
                                class="inline-form"
                                onsubmit="return confirm('Deseja excluir este aluno?');"
                            >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
