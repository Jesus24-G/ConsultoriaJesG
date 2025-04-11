<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function paginaNuevoCliente() {
        return view('admin.Cliente.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'comentario' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagenPath = null;
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $imagen->move(public_path('img/clientes'), $nombreImagen);
            $imagenPath = 'img/clientes/' . $nombreImagen;
        }

        Cliente::create([
            'nombre' => $request->nombre,
            'comentario' => $request->comentario,
            'imagen' => $imagenPath,
        ]);

        return redirect()->route('nuevo.cliente.get')->with('success', 'Cliente agregado correctamente');
    }
}
