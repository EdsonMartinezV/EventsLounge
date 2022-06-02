<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pack;
use App\Models\Event;
use App\Models\Image;
use App\Models\Paid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\File;

class EmployeeController extends Controller
{
    public function eventsConfirmated(){
        $this->authorize('employeeAction');
        $bookings= Event::where([['is_confirmed','=',1],['is_realized','=',0]])->get();
       
        return $bookings->toJson();
    }

    public function eventsRealized(){
        $this->authorize('employeeAction');
        $bookings= Event::where([['is_confirmed','=',1],['is_realized','=',1]])->get();
       
        return view("addImage",compact('bookings'));
    }

    public function eventsImages(Request $request, $id){
        $this->authorize('employeeAction');
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
        $this->authorize('employeeAction');
        $bookings= Event::where([['is_confirmed','=',1]])->get();
       
        return $bookings->toJson();
    }

    public function addPaid($id){
        $this->authorize('employeeAction');
        $bookings= Event::where([['id','=',$id]])->get();
        return $bookings->toJson();
    }

    public function savePaid(Request $request,$id){
        $this->authorize('employeeAction');
        $id = $id;
        $paid = new Paid;
        $paid->amount = $request->amount;
        $paid->event_id = $id;
        $paid->save();

        $bookings= Event::where([['id','=',$id]])->get();
        return $bookings->toJson();
    }

    public function allPaids(){
        $this->authorize('employeeAction');
        $paids= Paid::all();
        return $paids->toJson();
    }
}
