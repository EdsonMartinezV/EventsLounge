<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Image;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\File;

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
        $event = Event::find($eventId);
        $event->event_date = $request->event_date;
        $event->price = $request->price;
        if($request->is_confirmed == 1){
            $event->is_confirmed = Auth::user()->id;
            $event->save();
            return redirect('/manager');
        }else{
            return view('reasonEvent', compact('eventId'));
        } 
    }

    public function reason(Request $request, $id){
        $id = $id;

            $event = Event::find($id);
            $event->reason = $request->reason;
            $event->save();

            $details=[
                'title' => 'Venta en el mercado',
                'body' => 'Su evento con fecha de '.$event->event_date.' 
                ha sido rechazado debido a el motivo '.$event->reason 
            ];
            Mail::to("sop.man.kaem@gmail.com")->send(new TestMail($details));

            return redirect('/manager');
    }

    public function images( $id){
        $id = $id;
        $images= Image::join('events','images.event_id', '=', 'events.id')
        -> where ('images.event_id',$id)
        ->get();

        return view('imageView', compact('images'));
    }

    public function showUpdateImages(){
        $collection = collect();

        $employee= Event::join('users','events.user_id', '=', 'users.id')
        -> where ([['users.role','=','employee']])
        ->select('events.id','events.event_date','events.price','users.id as user_id')
        ->get();

        
        foreach ($employee as $a)
            $collection->push($a);

        $manager= Event::join('users','events.user_id', '=', 'users.id')
        ->where ('users.id','=',Auth::user()->id)
        ->select('events.id','events.event_date','events.price','users.id as user_id')
        ->get();

        foreach ($manager as $b)
            $collection->push($b);
        
      
        return $collection->toJson();
    }

    public function updateImages( $id){
        $id = $id;
        $images= Image::join('events','images.event_id', '=', 'events.id')
        -> where ('images.event_id',$id)
        ->select('images.id','images.url','images.event_id')
        ->get();

        return view('updateImage', compact('images'));
    }

    public function changeImages(Request $request,$id){

        $image = Image::select('url')->find($id);
        
       
        unlink(public_path($image['url']));
        $file = $request->file('imagen'); 
        $originalname = time().'_'.$file->getClientOriginalName();
        $file->storeAs('public/events',$originalname);
        
        $request->imagen = '/storage/events/'.$originalname;
        
        Image::where('id',$id)->update(['url'=>$request->imagen]);    

        $imagenes = Image::where('id', $id)->get(['id','url','event_id']);

        return redirect()->route('manager.events.images.update',$request->event);
    }

}
