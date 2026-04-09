<?php
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('cursos.index');
});

Route::get('/aluno', function () {
    return redirect()->route('alunos.index');
});


Route::resource('cursos', CursoController::class);

Route::resource('alunos', AlunoController::class);
