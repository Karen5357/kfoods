<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //creando funcionalidad
        return response()->json(data: producto::all(), status: 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //para almacenar
        $datos = $request->validate([
              'nombre'=> ['required','atring','max:100' ],
              'descripcion'=>['nullable','required','max=250'],
               'precio'=> ['required','integer','min-100' ],
                'cantidad'=> ['required','integer','min=1' ],
        ]);

    //Guardar base de datos en DB
    $producto=Producto::create(attributes: $datos);

     //Respuesta al usuario
     return response()->json(data: [ 
        'success'=> true,
         'message'=> 'Su pedido fue creado con exito'

     ], status:201);



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //responder al usuario
        return response()->json(data:producto::all(), status: 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Para actualizar datos
        $datos = $request->validate([
              'nombre'=> ['required','atring','max:100' ],
              'descripcion'=>['nullable','required','max=250'],
               'precio'=> ['required','integer','min-100' ],
                'cantidad'=> ['required','integer','min=1' ],
        ]);

    //Guardar base de datos en DB
    $producto=Producto::create(attributes: $datos);

     //Respuesta al usuario
     return response()->json(data: [ 
        'success'=> true,
         'message'=> 'Su pedido fue actualizado con exito'

     ], status:201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //para eliminar el producto
        $producto->delete();

        //respuesta al usuario
         return response()->json([ 
        'success'=> true,
         'message'=> 'Su producto fue eliminado con exito',

     ],status:200);
    }
}
