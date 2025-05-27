<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // GET: Listar productos
    public function index()
    {
        return Producto::all();
    }

    // POST: Crear nuevo producto
    public function store(Request $request)
    {
        $producto = Producto::create($request->all());
        return response()->json($producto, 201);
    }

    // GET: Mostrar un solo producto
    public function show($id)
    {
        return Producto::find($id);
    }

    // PUT: Actualizar producto
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->update($request->all());
        return response()->json($producto, 200);
    }

    // DELETE: Eliminar producto
    public function destroy($id)
    {
        Producto::destroy($id);
        return response()->json(null, 204);
    }
}
