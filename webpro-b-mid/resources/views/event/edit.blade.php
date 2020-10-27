@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('my-events.update', $event->event_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div>
                        <div class="form-group">
                            <strong>Event Name:</strong>
                            <input type="text" name="event_name" class="form-control" value="{{ $event->event_name }}">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <strong>Event Place:</strong>
                            <input type="text" name="event_place" class="form-control" value="{{ $event->event_place }}">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            <input type="text" name="event_price" class="form-control" value="{{ $event->event_price }}">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <strong>Event Start:</strong>
                            <input type="datetime-local" name="event_start" class="form-control" value="{{ $event->event_start }}">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <strong>Event End:</strong>
                            <input type="datetime-local" name="event_end" class="form-control" value="{{ $event->event_end }}">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <strong>Event Description</strong>
                            <textarea class="form-control" name="event_description" rows="3">{{ $event->event_description }}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection