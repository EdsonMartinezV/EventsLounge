<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pack;
use App\Models\Event;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\File;

class EmployeeController extends Controller
{
    public function eventsConfirmated(){
        
        $bookings= Event::where([['is_confirmed','=',1],['is_realized','=',0]])->get();
       
        return $bookings->toJson();
    }

    public function eventsRealized(){
        
        $bookings= Event::where([['is_confirmed','=',1],['is_realized','=',1]])->get();
       
        return view("addImage",compact('bookings'));
    }

    public function eventsImages(Request $request, $id){
        $image = new Image;
        $image->event_id = $id;
        $nombre = 'prueba';
        
   
      
        $image->save();

        $bookings = Event::all();
       
        return $bookings->toJson();
    }

    public function eventsPais(){

        $bookings = Event::all();
       
        return $bookings->toJson();
    }
}
