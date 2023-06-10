<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adulto_responsable;

class adulto_responsableController extends Controller
{
    //
    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required|string',
            'lastname'  => 'required|string',
            'rut' => 'required|integer',
            'vinculo' => 'required|string',
            'obs' => 'required|string',
            'direccion' => 'required|string',
            'phone' => 'required|string',
            'objetivos' => 'required|string',
            'email' => 'required|string',
            'rubro' => 'required|string'
        ]);

        adulto_responsable::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'rut' => $request->rut,
            'vinculo' => $request->vinculo,
            'obs' => $request->obs,
            'direccion' => $request->direccion,
            'phone' => $request->phone,
            'objetivos' => $request->objetivos,
            'email' => $request->email,
            'rubro' => $request->rubro
            ]);
            //redireccion
            return $request->all();
    }

    public function index(){
        # $posts = Post::where('user_id', $user->id)->latest()->paginate(20);
        $adultos = adulto_responsable::all();
        return $adultos;
    }

}
