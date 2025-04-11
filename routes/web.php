<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login.formulario');

