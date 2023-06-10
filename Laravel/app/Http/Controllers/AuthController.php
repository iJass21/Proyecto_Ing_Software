<?php

namespace App\Http\Controllers;

use \stdClass;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    //
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:150',
            'email' => 'required|string|email|max:150|unique:users',
            'password'=> 'required|string|min:8',
            'rut' => 'required|integer',
            'f_nac'=> 'required|date',
            'cargo' => 'required|string|max:50',
            'mod_ficha'=> 'required|boolean',
            'direccion' => 'required|string|max:150',
            'phone'=> 'required|integer',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rut' => $request->rut,
            'f_nac' => $request->f_nac,
            'cargo' => $request->cargo,
            'mod_ficha' => $request->mod_ficha,
            'direccion' => $request->direccion,
            'phone' => $request->phone
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer']);


    }

    public function login(Request $request){
        if(!Auth::attempt($request->only('email','password')))
        {
            return response()
                ->json(['message' => 'Unauthorized', 401]);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json([
                'message' => 'Hi '.$user->name,
                'AccessToken' => $token,
                'token_type' => 'Bearer',
                'user' => $user,
            ]);
    }

    public function logout(Request $request)
    {
        /*$user = Auth::user();
        PersonalAccessToken::where('tokenable_id', $user->id)->delete();
        Auth::logout();*/

        # Session::flush();

        auth()->user()->tokens()->delete();

        return [
            'message' => 'Sesion cerrada con exito, token destruidos'
        ];


    }

}
