@extends('layouts.app')

@section('title', 'Editar curso')

@section('content')
    <h1>Editar Curso</h1>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @method('PUT')
        @include('cursos._form', ['buttonText' => 'Salvar alteracoes'])
    </form>
@endsection
