<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function managerDashboard(){
        $this->authorize('managerAction');
        return view('managerDashboard');
    }

    public function index(){
        $this->authorize('managerAction');
        $users = User::all();
        $users->toJson();
        return $users;
    }

    public function create(){
        $this->authorize('managerAction');
        return view('createUsers');
    }

    public function store(Request $request){
        $this->authorize('managerAction');
        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password= Hash::make($request->password);
        $user->role= $request->role;
        $user->save();
        return redirect('/manager');
    }

    public function resetPassword($userId){
        $this->authorize('managerAction');
        $user = User::find($userId);
        return view('resetPasswordFromManager', compact('user'));
    }

    public function storePassword(Request $request, $userId){
        $this->authorize('managerAction');
        $user = User::find($userId);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/manager');
    }
}

