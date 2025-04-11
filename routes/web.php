<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicioController;
use App\Models\Servicio;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {


    $servicios = Servicio::all();
    return view('index', ['servicios' => $servicios]);


});

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login.formulario');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');

Route::get('/admin', function () {

    $servicios = Servicio::all();
    return view('admin.index', ['servicios' => $servicios]);
})->middleware('auth:admin')->name('admin.index');


// Ruta para servicios
Route::get('/admin/servicio/new', [ServicioController::class, 'paginaNuevoServicio'])->name('nuevo.servicio.get');
// Ruta para agregar nuevo servicio
Route::post('/admin/servicios/new', [ServicioController::class, 'store'])->name('servicios.store');
// Ruta para eliminar servicio
Route::delete('/servicios/{id}', [ServicioController::class, 'destroy'])->name('servicios.destroy');


// Ruta para cliente
Route::get('admin/cliente/new', [ClienteController::class, 'paginaNuevoCliente'])->name('nuevo.cliente.get');

