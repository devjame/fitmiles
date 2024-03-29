<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MembroController;
use App\Http\Controllers\MensalidadeController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\TreinadorController;
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
    return view('landing');
});


Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('treinadores', TreinadorController::class)->parameters([
        'treinadores' => 'treinador'
    ]);

    Route::resource('membros', MembroController::class);

    Route::resource('modalidades', ModalidadeController::class);

    Route::resource('planos', MensalidadeController::class)->parameters([
        'planos' => 'mensalidade'
    ]);

    Route::get('/calendario', function () {
        return view('calendario');
    })->name('calendario');
});
require __DIR__ . '/auth.php';
