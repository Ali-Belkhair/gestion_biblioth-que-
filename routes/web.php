<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class )->middleware(AuthMiddleware::class) ;
Route::resource('categories', CategorieController::class );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/form', [SessionController::class, 'afficherFormulaire'])->name('session.form');
Route::post('/form', [SessionController::class, 'traiterterFormulaire'])->name('session.traiter');
