<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function buyTicket($id){
        $user = Auth::user();
        Ticket::create([
            'event_id' => $id,
            'ticket_owner' => $user->id,
            'used' => false
        ]);
        // $ticket = Ticket::where('event_id', $id)->first();
        // return view('event.edit', compact('event'));
        return redirect()->route('my-tickets');
        // return view('ticket.buyTicket', compact('my-ticket'));
    }

    public function myTicket(){
        $user = Auth::user();
        $my_ticket = DB::table('tickets')
                        ->join('events', 'tickets.event_id','=','events.event_id')
                        ->select('tickets.*', 'events.event_name')
                        ->where('tickets.ticket_owner', $user->id);
        $my_ticket = $my_ticket->get();
        return view('ticket.myTicket', compact('my_ticket'));
    }
    
    public function markTicket(Request $request, $id)
    {
        $real_event_id = DB::table('tickets')
                            ->select('tickets.event_id')
                            ->where('tickets.ticket_id', $request->ticket_id)
                            ->value('event_id');
        if($real_event_id == $id)
        {
            $used = DB::table('tickets')
                        ->select('tickets.used')
                        ->where('tickets.ticket_id', $request->ticket_id)
                        ->value('used');
            if($used == 0)
            {
                Ticket::where('ticket_id', $request->ticket_id)->update([
                    'used' => true,
                ]);
                return redirect()->route('ticket-check', $id)->with('success', 'Ticket checked successfully');
            }
            else return redirect()->route('ticket-check', $id)->with('error', 'Ticket with that ID is already used');
        }
        else return redirect()->route('ticket-check', $id)->with('error', 'Ticket ID invalid');
    }

    public function ticketCheck($id)
    {
        $event = Event::where('event_id', $id)->first();
        return view('ticket.mark', compact('event'));
    }
}