<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

/// No tienes valores definidas en una variable, compact pide una variable declarada pero como no hay lo borrare
/// , compact('catalogo')
        return view('frontend.catalogo.catalogo');
    }
}
