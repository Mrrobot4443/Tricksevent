<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\User;
use App\Models\Villes;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('admin.tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Villes::all();
        $categories = Category::all();
        $events = Event::all();
        $users = User::all();
        return view('admin.tickets.create',compact('villes','categories','events','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'event' => 'required',
            'category_id' => 'required',
            'villes_id' => 'required',
            'content' => 'required',
            'prix' => 'required',
            'date_debut' => 'required',

        ]);
        $tickets = new Ticket();
        $tickets->events_id= $request->events_id;
        $tickets->villes_id = $request->villes_id;
        $tickets->category_id= $request->category_id;
        $tickets->quantity = $request->quantity;
        $tickets->ticket_price_1 = $request->ticket_price_1;
        $tickets->ticket_price_1 = $request->ticket_price_2;
        $tickets->users_id = $request->users_id;
        // if ($request->hasFile('image')) {
        //     $ticket->image = $request->file('image')->store('images/events');
        // }
        $tickets->save();
        return redirect()->route('ticket.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tickets =Ticket::find(decrypt($id));
        $categories = Category::all();
        $villes = Villes::all();
        $users = User::all();
        return view('admin.tickets.edit', compact('tickets','categories','villes','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */

        public function update(Request $request,$id)
    {
        $tickets = Ticket::find($id);
        $tickets->events_id= $request->events_id;
        $tickets->villes_id = $request->villes_id;
        $tickets->category_id= $request->category_id;
        $tickets->quantity = $request->quantity;
        $tickets->ticket_price_1 = $request->ticket_price_1;
        $tickets->ticket_price_1 = $request->ticket_price_2;
        $tickets->users_id = $request->users_id;
        if ($request->hasFile('image')) {
            $tickets->image = $request->file('image')->store('images/events');
        }
        $tickets->save();
        return redirect()->route('ticket.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ticket::destroy($id);
        return redirect()->route('ticket.index');
    }
}
