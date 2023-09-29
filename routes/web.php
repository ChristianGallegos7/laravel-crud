<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;

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

Route::get('/note', [NoteController::class, 'index'])->name('note.index');

Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');

Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');

Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');

Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');

Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note.show');

Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');

//controller resource
Route::resource('/post', PostController::class);
