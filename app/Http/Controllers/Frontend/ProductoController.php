<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function __invoke()
    {

    }
    public function mostrar(Producto $producto)
    {
        $productos = Producto::all();
        return view('frontend.productos.mostrar', compact('producto'));
    }
}
