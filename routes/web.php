<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamesController;

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

Route::get('/', [JamesController::class, 'index'])->name('index');
Route::get('/insert', [JamesController::class, 'insert'])->name('insert');
Route::get('/create', [JamesController::class, 'create'])->name('create');
Route::get('/show', [JamesController::class, 'show'])->name('show');
Route::get('/delete/{id}', [JamesController::class, 'delete'])->name('delete');
Route::get('/view/{id}', [JamesController::class, 'view'])->name('view');
Route::get('/update/{id}', [JamesController::class, 'update'])->name('update');
Route::get('/edit/{id}', [JamesController::class, 'edit'])->name('edit');
