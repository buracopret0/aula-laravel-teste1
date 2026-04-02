@extends('layouts.app')

@section('title', 'Novo curso')

@section('content')
    <h1>Novo Curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @include('cursos._form', ['buttonText' => 'Criar curso'])
    </form>
@endsection



