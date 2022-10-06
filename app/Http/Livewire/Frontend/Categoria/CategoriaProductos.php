<?php

namespace App\Http\Livewire\Frontend\Categoria;

use Livewire\Component;
use App\Models\Producto;

class CategoriaProductos extends Component
{
 //  public $categoria;

    public $productos = [];

    public function cargaProductos()
    {
        // $this->productos = $this->categoria->productos()->where('estado', 2)->take(15)->get();
        $this->productos  = Producto::all();
        $this->emit($this->productos);
    }

    public function render()
    {
        return view('livewire.frontend.categoria.categoria-productos');
    }
}
