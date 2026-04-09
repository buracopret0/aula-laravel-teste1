@extends('layouts.app')

@section('title', 'Editar Alunos')

@section('content')
    <h1>Editar Aluno</h1>

    <form action="{{ route('alunos.update', $aluno) }}" method="POST">
        @method('PUT')
        @include('alunos._forms', ['buttonText' => 'Salvar alteracoes'])
    </form>
@endsection
