<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    //

    public function paginaNuevoServicio()
    {
        return view('admin.Servicio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagenPath = null;
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $imagen->move(public_path('img/servicios'), $nombreImagen);
            $imagenPath = 'img/servicios/' . $nombreImagen;
        }

        Servicio::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenPath,
        ]);

        return redirect()->route('nuevo.servicio.get')->with('success', 'Servicio agregado correctamente');
    }

    public function destroy($id)
    {
        $servicio = Servicio::findOrFail($id);

        // Elimina la imagen del disco si existe
        if ($servicio->imagen && file_exists(public_path($servicio->imagen))) {
            unlink(public_path($servicio->imagen));
        }

        $servicio->delete();

        return redirect()->back()->with('success', 'Servicio eliminado correctamente.');
    }
}
