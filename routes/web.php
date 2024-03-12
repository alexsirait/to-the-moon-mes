<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuanController;

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

Route::get('/', [QuanController::class, 'index'])->name('index');
Route::get('/insert', [QuanController::class, 'insert'])->name('insert');
Route::get('/create', [QuanController::class, 'create'])->name('create');
Route::get('/show', [QuanController::class, 'show'])->name('show');
Route::get('/delete', [QuanController::class, 'delete'])->name('delete');
Route::get('/view/{id}', [QuanController::class, 'view'])->name('view');
Route::get('/update/{id}', [QuanController::class, 'update'])->name('update');
Route::get('/edit', [QuanController::class, 'edit'])->name('edit');
