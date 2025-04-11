<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicioController;
use App\Models\Cliente;
use App\Models\Servicio;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   
    $servicios = Servicio::all();
    $clientes = Cliente::all();
    return view('index', ['servicios' => $servicios, 'clientes' => $clientes]);

});

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
// Ruta para cerrar sesion
Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin', function () {

    $servicios = Servicio::all();
    $clientes = Cliente::all();
    return view('admin.index', ['servicios' => $servicios, 'clientes' => $clientes]);
})->middleware('auth:admin')->name('admin.index');


// Ruta para servicios
Route::get('/admin/servicio/new', [ServicioController::class, 'paginaNuevoServicio'])->middleware('auth:admin')->name('nuevo.servicio.get');
// Ruta para agregar nuevo servicio
Route::post('/admin/servicios/new', [ServicioController::class, 'store'])->middleware('auth:admin')->name('servicios.store');
// Ruta para eliminar servicio
Route::delete('/servicios/{id}', [ServicioController::class, 'destroy'])->middleware('auth:admin')->name('servicios.destroy');


// Ruta para cliente
Route::get('admin/cliente/new', [ClienteController::class, 'paginaNuevoCliente'])->middleware('auth:admin')->name('nuevo.cliente.get');
// Ruta para agregar un nuevo cliente
Route::post('admin/cliente/new', [ClienteController::class, 'store'])->middleware('auth:admin')->name('cliente.store');
// Ruta para eliminar cliente 
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->middleware('auth:admin')->name('cliente.destroy');


// Ruta para enviar email
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');

