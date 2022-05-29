<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pack;
use App\Models\Event;
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
}
