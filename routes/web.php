<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/books', [BookController::class, 'index']) ->name('books.index');
Route::get('/books/create', [BookController::class, 'create']) ->name('books.create');
Route::post('/books/store', [BookController::class, 'store']) ->name('books.store');
Route::get('/books/{id}', [BookController::class, 'show']) ->name('books.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit']) ->name('books.edit');
Route::put('/books/{id}/update', [BookController::class, 'update']) ->name('books.update');
Route::delete('/books/{id}/destroy', [BookController::class, 'destroy']) ->name('books.destroy');