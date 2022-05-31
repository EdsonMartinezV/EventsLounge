<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(){
        $bills = Bill::all();
        $bills->toJson();
        return $bills;
    }

    public function create($eventId){
        return view('createBills', compact('eventId'));
    }

    public function store(Request $request, $eventId){
        $bill = new Bill();
        $bill->concept = $request->concept;
        $bill->amount = $request->amount;
        $bill->date = $request->date;
        $bill->event_id = $eventId;
        $bill->save();
        return redirect()->route('manager');
    }
}
