<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    //

    public function paginaNuevoServicio() {
        return view('admin.Servicio.create');
    }
}
