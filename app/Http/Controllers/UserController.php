<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Resources\UserResource;

class UserController extends Controller
{
    public function validate(Request $request){
        
        $user = User::where('email', $request->email)->first();

         //valida que se ingresen ambos campos
        if(empty($request->password)||empty($request->password)){
            return response()->json(['error'=>'Ingrese ambos campos']);
        }

        //verifica si existe el usuario
        else if(!$user){
            return response()->json(['error'=>'Usuario no registrado']);
        }

        //verifica si no existe esa contraseña
        else if($request->password != $user->password ){
            return response()->json(['error'=>'Ingrese otra contraseña']);
        }

        //valida y autentica usuario
        else if($request->password == $user->password){
            Auth::login($user);
            return response()->json(['success'=>'Ingreso exitoso']);
        }
    }  
    
    public function register(Request $request){
        
    }   



}

