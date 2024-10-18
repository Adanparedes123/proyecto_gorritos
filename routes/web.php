<?php

use App\Http\Controllers\p_principal\P_controller;
use App\Http\Controllers\p_principal\P_ventasController;
use App\Http\Controllers\p_principal\P_almacenController;
use App\Http\Controllers\p_principal\P_tiendaController;
use App\Http\Controllers\p_principal\P_clientesController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () { return view('welcome');});
Route::get('/', function () { return view('auth/login');});
//Route::get('/', function () { return view('index');});
//Route::view('/','layouts/welcome')/* ->middleware('auth') */;
//oute::view('/', 'layouts/welcome');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/af',[P_controller::class,'vis_af']);
Route::get('/ventas',[P_ventasController::class,'vis_ventas']);
Route::get('/almacen',[P_almacenController::class,'vis_almacen']);
Route::get('/tienda',[P_tiendaController::class,'vis_tienda']);
Route::get('/loginn',[P_tiendaController::class,'loginn']);
Route::get('/registerr',[P_tiendaController::class,'registerr']);


/* ------------------CLIENTES----------------- */
//Route::get('/clientes',[P_clientesController::class,'vis_clientes']);
Route::get('/clientes',[P_clientesController::class,'index'])->name('clientes.view');;
//Route::get('/clientes',[P_clientesController::class,'vis_clientes'])->name('clientes.vis_clientes');
Route::post('/clientes',[P_clientesController::class,'store'])->name('clientes.store');
Auth::routes();
