@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Edit event: {{ $event->event_name }}</h2>
            <div class="card my-2">
                <div class="card-body">
                    <form action="{{ route('my-events.update', $event->event_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="d-flex flex-column">
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
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="event-price">Rp.</span>
                                        </div>
                                        <input type="number" name="event_price" class="form-control" placeholder="Event Price" aria-describedby="event-price" value="{{ $event->event_price }}">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <div class="form-group w-50">
                                    <strong>Event Start:</strong>
                                    <input type="datetime-local" name="event_start" class="form-control" value="{{ $event->event_start }}">
                                </div>
                                <div class="form-group w-50 ml-4">
                                    <strong>Event End:</strong>
                                    <input type="datetime-local" name="event_end" class="form-control" value="{{ $event->event_end }}">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <strong>Event Description</strong>
                                    <textarea class="form-control" name="event_description" rows="5">{{ $event->event_description }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-right pr-0">
                                <a class="btn btn-danger px-4" href="{{ url()->previous() }}">Back</a>
                                <button type="submit" class="btn btn-primary px-5 ml-3">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection