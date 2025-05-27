<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FormularioController extends Controller
{
    // Mostrar el formulario
    public function mostrarFormulario()
    {
        return view('formulario'); // Asegúrate de tener la vista 'formulario.blade.php'
    }

    // Procesar los datos del formulario
    public function procesarFormulario(Request $request)
    {
        // Validación de los datos (opcional)
        $request->validate([
            'nombre' => 'required|min:3',
        ]);

        // Obtener los datos del formulario
        $nombre = $request->input('nombre');

        // Aquí puedes procesar los datos, por ejemplo, guardarlos en la base de datos

        // Redirigir con un mensaje de éxito
        return redirect('/form')->with('mensaje', 'Formulario enviado correctamente');
    }
}
