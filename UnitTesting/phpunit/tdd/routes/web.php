<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'books', 'as' => 'books.'], function () {
    Route::get('/', [BookController::class, 'index'])->name('index');
    Route::post('/', [BookController::class, 'store'])->name('store');
    Route::patch('/{book}', [BookController::class, 'update'])->name('update');
    Route::delete('/{book}', [BookController::class, 'destroy'])->name('destroy');
});
