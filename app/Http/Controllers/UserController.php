<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function validateUser(Request $request){
        
        $user = User::where('email', $request->email)->first();

         //valida que se ingresen ambos campos
        if(empty($request->email)||empty($request->password)){
            return response()->json(['error'=>'Ingrese ambos campos']);
        }

        //verifica si existe el usuario
        else if(!$user){
            return response()->json(['error'=>'Usuario no registrado']);
        }

        //verifica si no existe esa contraseña
        else if($request->password != $user->password ){
            return response()->json(['error'=>'Contraseña incorrecta']);
        }

        //valida y autentica usuario
        else if($request->password == $user->password){
            Auth::login($user);
            return response()->json(['success'=>'Ingreso exitoso']);
        }
    }  
 
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }
    
    public function registerUser(Request $request){
        $variables = $request->all();
        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->lastname;
        $user->email = $request->email;
        $user->password= $request->password;
        $user->role= 'client';
        $user->save();

        Auth::login($user);
       
        return response()->json($variables);
       
    }

    public function index(){
        $users = User::all();
        $users->toJson();
        return $users;
    }
}

