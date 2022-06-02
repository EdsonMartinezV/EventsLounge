<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;

class PackController extends Controller
{
    public function index()
    {
        $this->authorize('managerAction');
        $packs = Pack::all();
        $packs->toJson();
        return $packs;
    }

    public function create(){
        $this->authorize('managerAction');
        return view('createPack');
    }

    public function store(Request $request){
        $this->authorize('managerAction');
        $pack = new Pack();
        $pack->name = $request->name;
        $pack->price = $request->price;
        $pack->is_active = $request->is_active;
        $pack->save();
        return redirect('/packs');
    }
}
