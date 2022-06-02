<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pack;
use App\Models\Event;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function myBookings(Request $request){

        //$bookings = User::with('events')->where('id',Auth::user()->id)->get();
        $bookings = Event::where('user_id',Auth::user()->id)->get();
    
       return $bookings->toJson();
    }

    public function deleteBookings(Request $request){

     
        Event::where('id',$request->id_event)->delete();
        $bookings = Event::where('user_id',Auth::user()->id)->get();
       
        return $bookings->toJson();
    }

    public function showBooking($id){
        
        $bookings = Event::where('id',$id)->get();
       
        return $bookings->toJson();
    }

    public function updateBooking(Request $request, $id){
        
        Event::where('id',$id)->update(['event_date'=>$request->date,'price'=>$request->price]);
        $bookings = Event::where('id',$id)->get();
       
        return $bookings->toJson();
    }

    public function addImage(Request $request, $id){
        
        $images= Image::join('events','images.event_id', '=', 'events.id')
        -> where ('images.event_id',$id)
        ->select('images.id','images.url','images.event_id','images.user_id')
        ->get();

        return view('imageClient', compact('images','id'));
    }

    public function addNewImage(Request $request, $id){
        
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
                $image->user_id =Auth::user()->id;
                $image->save();
         
            }
        return redirect()->route('client.add.image',$id);
    }

    public function deleteImage(Request $request, $id){
        $idEvent = $request->event;
        $imagenes = Image::select('url')->find($id);

        unlink(public_path($imagenes['url']));
        
        Image::where('id',$id)->delete();

        return redirect()->route('client.add.image',$idEvent);
    }

    public function changeImage(Request $request, $id){
        $idEvent = $request->event;
        $image = Image::select('url')->find($id);
        
       
        unlink(public_path($image['url']));
        $file = $request->file('imagen'); 
        $originalname = time().'_'.$file->getClientOriginalName();
        $file->storeAs('public/events',$originalname);
        
        $request->imagen = '/storage/events/'.$originalname;
        
        Image::where('id',$id)->update(['url'=>$request->imagen]);    

        $imagenes = Image::where('id', $id)->get(['id','url','event_id']);;

        return redirect()->route('client.add.image',$idEvent);
    }

    public function newBooking(Request $request, $packId){
        $pack = Pack::find($packId);
        $event = new Event;
        $event->event_date = $request->date;
        $event->price = $pack->price;
        $event->user_id = Auth::user()->id;
        $event->packs()->attach($pack->id);
        $event->save();
        return redirect()->route('client.principal');
    }
}