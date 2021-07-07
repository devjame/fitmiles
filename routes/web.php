<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/treinadores', function () {
        return view('treinadores');
    })->name('treinadores');

    Route::get('/membros', function () {
        return view('membros');
    })->name('membros');

    Route::get('/calendario', function () {
        return view('calendario');
    })->name('calendario');

    Route::get('/planos', function () {
        return view('planos');
    })->name('planos');

    Route::get('/modalidades', function () {
        return view('modalidades');
    })->name('modalidades');
    
});
require __DIR__ . '/auth.php';
