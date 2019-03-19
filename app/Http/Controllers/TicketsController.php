<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketsController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'full_name'=>'required',
            'contact_no'=>'required',
            'email'=>'required',
            'no_of_tickets'=>'required'
        ]);

        $ticket= new Ticket;
        $ticket->full_name=$request->input('full_name');
        $ticket->contact_no=$request->input('contact_no');
        $ticket->email=$request->input('email');
        $ticket->no_of_tickets=$request->input('no_of_tickets');
        $ticket->save();

        return redirect('/#tour')->with('success','Tikcets Booked');
    }

}
