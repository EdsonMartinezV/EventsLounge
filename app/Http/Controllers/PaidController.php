<?php

namespace App\Http\Controllers;

use App\Models\Paid;
use Illuminate\Http\Request;

class PaidController extends Controller
{
    public function index(){
        $this->authorize('managerAction');
        $paids = Paid::all();
        $paids->toJson();
        return $paids;
    }
}
