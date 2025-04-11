<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login.formulario');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth:admin')->name('admin.index');
