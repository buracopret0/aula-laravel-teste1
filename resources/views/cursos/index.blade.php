@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
    <h1>Lista de Cursos</h1>

    <div class="actions">
        <a href="{{ route('cursos.create') }}" class="btn">Novo curso</a>
    </div>

    @if ($cursos->isEmpty())
        <p>Nenhum curso cadastrado ainda.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descricao</th>
                    <th>Criado em</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <td>{{ $curso->nome }}</td>
                        <td>{{ $curso->descricao }}</td>
                        <td>{{ $curso->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-warning">Editar</a>
                            <form
                                action="{{ route('cursos.destroy', $curso) }}"
                                method="POST"
                                class="inline-form"
                                onsubmit="return confirm('Deseja excluir este curso?');"
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
