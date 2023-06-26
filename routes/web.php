<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EmprestimoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() {
    return view('index');
});

Route::get('/alunos',               [AlunoController::class, 'index'])->name('alunos.index');
Route::get('/alunos/create',        [AlunoController::class, 'create'])->name('alunos.create');
Route::post('/alunos/create',       [AlunoController::class, 'store'])->name('alunos.store');
Route::get('/alunos/edit/{id}',     [AlunoController::class, 'edit'])->name('alunos.edit');
Route::post('/alunos/update/{id}',  [AlunoController::class, 'update'])->name('alunos.update');
Route::get('/alunos/delete/{id}',   [AlunoController::class, 'delete'])->name('alunos.delete');


Route::get('/livros',               [LivroController::class, 'index'])->name('livros.index');
Route::get('/livros/create',        [LivroController::class, 'create'])->name('livros.create');
Route::post('/livros/create',       [LivroController::class, 'store'])->name('livros.store');
Route::get('/livros/edit/{id}',     [LivroController::class, 'edit'])->name('livros.edit');
Route::post('/livros/update/{id}',  [LivroController::class, 'update'])->name('livros.update');
Route::get('/livros/delete/{id}',   [LivroController::class, 'delete'])->name('livros.delete');

Route::get('/emprestimos',              [EmprestimoController::class, 'index'])->name('emprestimos.index');
Route::get('/emprestimos/create',       [EmprestimoController::class, 'create'])->name('emprestimos.create');
Route::post('/emprestimos/create',      [EmprestimoController::class, 'store'])->name('emprestimos.store');
Route::get('/emprestimos/edit/{id}',    [EmprestimoController::class, 'edit'])->name('emprestimos.edit');
Route::post('/emprestimos/update/{id}', [EmprestimoController::class, 'update'])->name('emprestimos.update');
Route::get('/emprestimos/delete/{id}',  [EmprestimoController::class, 'delete'])->name('emprestimos.delete');
Route::get('/emprestimos/devolver/{id}', [EmprestimoController::class, 'devolver'])->name('emprestimos.devolver');




Route::get('/teste', [TesteController::class, 'teste'])->name('teste');
