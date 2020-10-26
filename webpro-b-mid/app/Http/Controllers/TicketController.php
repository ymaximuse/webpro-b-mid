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
        return redirect()->route('my-tickets');
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
}