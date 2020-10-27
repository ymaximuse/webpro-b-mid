@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
        <table class="table table-striped">
            <thead class="text-left thead-dark">
                <th>Code</th>
                <th>Name</th>
                <th>Place</th>
                <!-- <th class="col-xl">Jawaban</th> -->
                <th>Event Price</th>
                <th>Event Start</th>
                <th>Event End</th>
                <!-- <th>Check Attendance</th> -->
            </thead>
            <tbody>
                @foreach($my_event as $event => $t)
                <tr class="text-left">
                    <td>{{$t->event_id}}</td>
                    <td>{{$t->event_name}}</td>
                    <td>{{$t->event_place}}</td>
                    <td>{{$t->event_price}}</td>
                    <td>{{$t->event_start}}</td>
                    <td>{{$t->event_end}}</td>
                    <!-- <td>
                        <a href="{{ route('mark-tickets', ['id' => $event->event_id]) }}">Check</a>
                    </td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a class="btn btn-primary" href="{{'my-events'}}">All Events</a>
</div>
@endsection