@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
        <table class="table table-striped">
            <thead class="text-left thead-dark">
                <th>Code</th>
                <th>Name</th>
                <!-- <th class="col-xl">Jawaban</th> -->
                <th>Purchase Date</th>
                <th>Used</th>
            </thead>
            <tbody>
                @foreach($my_ticket as $ticket => $t)
                <tr class="text-left">
                    <td>{{$t->ticket_id}}</td>
                    <td>{{$t->event_name}}</td>
                    <td>{{$t->updated_at}}</td>
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