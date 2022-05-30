<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        $events->toJson();
        return $events;
    }

    public function edit($eventId){
        $event = Event::find($eventId);
        return view('editEvents', compact('event'));
    }

    public function update(Request $request, $eventId){
        $eventId=$eventId;
        if($request->is_confirmed=='1'){
            $event = Event::find($eventId);
            $event->event_date = $request->event_date;
            $event->price = $request->price;
            $event->save();
            return redirect('/manager');
        }else{
            return redirect()->route('manager.events.reason',$eventId);
        } 
    }
}
