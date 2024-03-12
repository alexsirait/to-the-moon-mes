<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrangController;

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

Route::get('/', [OrangController::class, 'index'])->name('index');
Route::get('/insert', [OrangController::class, 'insert'])->name('insert');
Route::get('/create', [OrangController::class, 'create'])->name('create');
Route::get('/show', [OrangController::class, 'show'])->name('show');
Route::get('/delete', [OrangController::class, 'delete'])->name('delete');
Route::get('/view/{id}', [OrangController::class, 'view'])->name('view');
Route::get('/update/{id}', [OrangController::class, 'update'])->name('update');
Route::get('/edit', [OrangController::class, 'edit'])->name('edit');
Route::get('/listOrang', [OrangController::class, 'listOrang'])->name('listOrang');
