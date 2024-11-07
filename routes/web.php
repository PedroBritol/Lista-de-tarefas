<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TarefaController::class, 'index'])->name('site.index');

Route::post('/tarefa/store', [TarefaController::class, 'store'])->name('tarefa.store');
Route::post('/tarefa/update/{id}', [TarefaController::class, 'update'])->name('tarefa.update');
Route::delete('/tarefa/delete/{id}', [TarefaController::class, 'destroy'])->name('tarefa.delete');


