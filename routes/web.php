<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;

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

Route::middleware(['auth'])->group(function(){
    Route::get('/clients', [ClientController::class, 'index'])->name('dashboard');
    Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
    Route::get('/client/{client_id}', [ClientController::class, 'show'])->name('client.show');
    Route::get('/client/{client}/edit', [ClientController::class, 'edit'])->name('client.edit');
    Route::patch('/client/{client_id}', [ClientController::class, 'update'])->name('client.update');
    Route::delete('/client/{client}', [ClientController::class, 'destroy'])->name('client.delete');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/client/{client}/dossiers', [DossierController::class, 'index'])->name('dossiers');
    Route::get('/client/{client}/create', [DossierController::class, 'create'])->name('dossier.create');
    Route::post('/client/{client}/store', [DossierController::class, 'store'])->name('dossier.store');
    Route::get('/dossier/{dossier_id}', [DossierController::class, 'show'])->name('dossier.show');
    Route::get('/dossier/{dossier}/edit', [DossierController::class, 'edit'])->name('dossier.edit');
    Route::patch('/dossier/{dossier_id}', [DossierController::class, 'update'])->name('dossier.update');
    Route::delete('/dossier/{dossier}', [DossierController::class, 'destroy'])->name('dossier.delete');
});

require __DIR__.'/auth.php';
