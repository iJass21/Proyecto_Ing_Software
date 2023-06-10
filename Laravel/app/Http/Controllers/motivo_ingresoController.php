<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\motivo_ingreso;

class motivo_ingresoController extends Controller
{
    //
    public function store(Request $request){

        $this->validate($request,[
            'description' => 'required|string'
        ]);

        motivo_ingreso::create([
            'description' => $request->description
            ]);
            //redireccion
            return $request->all();
    }
}
