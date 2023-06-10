<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\children;
use App\Models\adulto_responsable;

class childrenController extends Controller
{
    //

    public function store(Request $request){

        $this->validate($request,[
            'adult_respon_id' => 'required',
            'name' => 'required|string',
            'lastname'  => 'required|string',
            'rut' => 'required|integer',
            'f_nac' => 'required|date',
            'obs' => 'required|string',
            'direccion' => 'required|string',
            'phone_contact' => 'required|string',
            'description' => 'required|string'
        ]);

        $adultos = adulto_responsable::findOrFail($request->adult_respon_id);
        $adultos->Children()->create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'rut' => $request->rut,
            'f_nac' => $request->f_nac,
            'obs' => $request->obs,
            'direccion' => $request->direccion,
            'phone_contact' => $request->phone_contact,
            'description' => $request->description
        ]);
            //redireccion
            return $request->all();
    }
}
