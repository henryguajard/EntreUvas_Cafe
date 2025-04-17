<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto; 

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        Contacto::create($request->all());

        return back()->with('success', '¡Mensaje enviado correctamente!');
    }
}
