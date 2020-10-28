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
            @if ($message = Session::get('error'))
                <div class="alert alert-danger">
                    <p>{{$message}}</p>
                </div>
            @endif
            <h2>{{$event->event_name}}</h2>
            <form action="{{ route('mark-ticket', $event->event_id) }}" method="GET">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="w-100">
                        <div class="form-group">
                            <strong class="p-2">Ticket ID:</strong>
                            <input type="text" name="ticket_id" class="form-control" placeholder="Ticket ID">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <a class="btn btn-danger px-5" href="{{ route('my-events.show', $event->event_id) }}">Back</a>
                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
