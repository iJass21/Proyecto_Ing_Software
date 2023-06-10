<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\children;
use App\Models\ficha_child;

class ficha_childController extends Controller
{
    //
    public function store(Request $request){

        $this->validate($request,[
            'children_id' => 'required',
            'fec_ingreso' => 'required|date',
            'fec_salida'  => 'required|date',
            'objetivos' => 'required|string',
            'description' => 'required|string'
        ]);

        $children = children::findOrFail($request->children_id);
        $children->fichas()->create([
            'fec_ingreso' => $request->fec_ingreso,
            'fec_salida' => $request->fec_salida,
            'objetivos' => $request->objetivos,
            'description' => $request->description
        ]);
            //redireccion
            return $request->all();
    }
}
