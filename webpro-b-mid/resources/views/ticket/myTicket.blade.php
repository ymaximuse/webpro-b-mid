@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
        <table class="table table-striped text-center">
            <thead class="table-info">
                <th>Code</th>
                <th>Name</th>
                <th>Purchase Time</th>
                <th>Event Time</th>
                <th>Used</th>
            </thead>
            <tbody>
                @foreach($my_ticket as $ticket => $t)
                <tr >
                    <td>{{$t->ticket_id}}</td>
                    <td>{{$t->event_name}}</td>
                    <td>{{$t->updated_at}}</td>
                    <td>{{$t->event_start}}</td>
                    <td>{{$t->used}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- <a class="btn btn-primary" href="{{'my-tickets'}}">My Tickets</a> -->
    <a class="btn btn-primary" href="{{'my-events'}}">My Events</a>
</div>
@endsection