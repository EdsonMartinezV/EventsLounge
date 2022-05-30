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
        $urlimages = [];
       
        $imagenes = $request->file('images');
            foreach($imagenes as $imagen){
                $nombre = time().'_'.$imagen->getClientOriginalName();
                $imagen->storeAs('public/events',$nombre);
              
                
                $urlimages[]['url'] = '/storage/events/'.$nombre;
            }

            foreach($urlimages as $routeimage){
                $image = new Image;
                $image->event_id = $id;
                $image->url =$routeimage['url'];
                $image->save();
         
            }
   

        $bookings= Event::where([['is_confirmed','=',1],['is_realized','=',1]])->get();
       
        return redirect()->route('employee.realized');
    }

    public function eventsPais(){

        $bookings = Event::all();
       
        return $bookings->toJson();
    }
}
