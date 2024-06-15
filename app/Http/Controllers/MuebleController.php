<?php

namespace App\Http\Controllers;

use App\Models\Mueble;
use Illuminate\Http\Request;

class MuebleController extends Controller
{
    public function index()
    {
        $muebles = Mueble::all();
        return view('muebles.index', compact('muebles'));
    }

    public function create()
    {
        return view('muebles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'material' => 'required',
            'precio' => 'required|numeric',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $mueble = new Mueble();
        $mueble->nombre = $request->nombre;
        $mueble->material = $request->material;
        $mueble->precio = $request->precio;

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $mueble->imagen = $filename;
        }

        $mueble->save();

        return redirect()->route('muebles.index')->with('success', 'Mueble creado exitosamente');
    }

    public function show($id)
    {
        $mueble = Mueble::findOrFail($id);
        return view('muebles.show', compact('mueble'));
    }

    public function edit($id)
    {
        $mueble = Mueble::findOrFail($id);
        return view('muebles.edit', compact('mueble'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'material' => 'required',
            'precio' => 'required|numeric',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $mueble = Mueble::findOrFail($id);
        $mueble->nombre = $request->nombre;
        $mueble->material = $request->material;
        $mueble->precio = $request->precio;

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $mueble->imagen = $filename;
        }

        $mueble->save();

        return redirect()->route('muebles.index')->with('success', 'Mueble actualizado exitosamente');
    }

    public function destroy($id)
    {
        $mueble = Mueble::findOrFail($id);
        $mueble->delete();
        return redirect()->route('muebles.index')->with('success', 'Mueble eliminado exitosamente');
    }
}
