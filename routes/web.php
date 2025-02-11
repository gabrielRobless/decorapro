<?php
use App\Http\controllers\ProductosController;
use App\Http\controllers\InicioController;
use App\Http\Controllers\PapelTapizController;
use App\Http\Controllers\PercianasController;
use App\Http\Controllers\CortinasController;
use App\Http\Controllers\PersianasProductController;
use App\Http\Controllers\DistribuidorController;
use App\Http\Controllers\AutomatizacionController;
use App\Http\Controllers\Inicio;
use App\Http\Controllers\PolPrivController;
use App\Http\Controllers\ReenController;
use App\Http\Controllers\TerminosController;



use Illuminate\Support\Facades\Route;


Route::get('/',[InicioController::class, 'index'])->name('Inicio');
Route::get('/persianas',[PercianasController::class, 'index'])->name('persianas');
Route::get('/persianas/products',[PersianasProductController::class, 'index'])->name('persianaspro');
Route::get('/persianas/products/{id}',[PersianasProductController::class, 'show'])->name('persianaspro.show');
Route::get('/papeltapiz',[PapelTapizController::class, 'index'])->name('papelt');
Route::get('/papeltapiz/{id}', [PapelTapizController::class, 'show'])->name('producto.show');
Route::get('/cortinas',[CortinasController::class, 'index'])->name('cortinas');
Route::get('/distribuidores',[DistribuidorController::class, 'index'])->name('distribuidor');
Route::get('/automatizacion',[AutomatizacionController::class, 'index'])->name('automatizacion');
Route::get('/politicas-de-privacidad',[PolPrivController::class, 'index'])->name('privazidad');
Route::get('/politica-de-reembolso',[ReenController::class, 'index'])->name('reembolso');
Route::get('/terminos-del-servicio',[TerminosController::class, 'index'])->name('Terminos');


Route::get('/enviar-formulario', [Inicio::class, 'enviar'])->name('enviar.formulario');
