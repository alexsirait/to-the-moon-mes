<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HewanController;

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

Route::get('/', [HewanController::class, 'index'])->name('index');
Route::get('/insert', [HewanController::class, 'insert'])->name('insert');
Route::get('/create', [HewanController::class, 'create'])->name('create');
Route::get('/show', [HewanController::class, 'show'])->name('show');
Route::get('/delete/{id}', [HewanController::class, 'delete'])->name('delete');
Route::get('/view/{id}', [HewanController::class, 'view'])->name('view');
Route::get('/update/{id}', [HewanController::class, 'update'])->name('update');
Route::get('/edit/{id}', [HewanController::class, 'edit'])->name('edit');
