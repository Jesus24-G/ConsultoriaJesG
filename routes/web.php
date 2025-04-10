<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login.form');

