<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class CategoriaController extends Controller
{
    public function mostrar(Producto $product)
    {
        $products = $product->all();
        return view('frontend.categorias.mostrar', compact('products'));
    }
}
