
@php
use App\Http\Controllers\EventController;

@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <h2>{{$event->event_name}}</h2>
            <table class="table table-bordered table-responsive-lg">
                <tr>
                    <th>Event Organizer</th>
                    <td>
                        {{ $organizer }}
                    </td>
                </tr>
                <tr>
                    <th>Event Place</th>
                    <td>{{$event->event_place}}</td>
                </tr>
                <tr>
                    <th>Event Time</th>
                    <td>{{$event->event_start}} - {{$event->event_end}}</td>
                </tr>
                    <th>Event Price</th>
                    <td>{{$event->event_price}}</td>
                </tr>
                </tr>
                    <th>Event Description</th>
                    <td>{{$event->event_description}}</td>
                </tr>
            </table>
            
            <a class="btn btn-success" href="{{ route('ticket-check', $event->event_id) }}">Check Tickets</a>
            <a class="btn btn-primary" href="{{route('my-events.index')}}">Back</a>
            
        </div>
    </div>
</div>
@endsection
