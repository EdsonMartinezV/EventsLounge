<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pack;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function eventsConfirmated(){
        
        $bookings= Event::where([['is_confirmed','=',1],['is_realized','=',0]])->get();
       
        return $bookings->toJson();
    }
}
