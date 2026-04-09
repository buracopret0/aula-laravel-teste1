@extends('layouts.app')

@section('title', 'Novo Aluno')

@section('content')
    <h1>Novo Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">
        @include('alunos._forms', ['buttonText' => 'Criar aluno'])
    </form>
@endsection



