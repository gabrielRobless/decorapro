<?php
use App\Http\controllers\ProductosController;
use App\Http\controllers\InicioController;
use App\Http\Controllers\PapelTapizController;
use App\Http\Controllers\PercianasController;
use App\Http\Controllers\CortinasController;
use Illuminate\Support\Facades\Route;


Route::get('/',[InicioController::class, 'index'])->name('Inicio');
Route::get('/persianas',[PercianasController::class, 'index'])->name('persianas');
Route::get('/papeltapiz',[PapelTapizController::class, 'index'])->name('papelt');
Route::get('/papeltapiz/{id}', [PapelTapizController::class, 'show'])->name('producto.show');
Route::get('/cortinas',[CortinasController::class, 'index'])->name('cortinas');
