@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Create a new event</h2>
            <div class="card my-2">
                <div class="card-body">
                    <form action="{{ route('my-events.store') }}" method="POST">
                        @csrf
                        <div class="d-flex flex-column">
                            <div>
                                <div class="form-group">
                                    <strong>Event Name:</strong>
                                    <input type="text" name="event_name" class="form-control" placeholder="Event Name">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <strong>Event Place:</strong>
                                    <input type="text" name="event_place" class="form-control" placeholder="Event Place">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <strong>Price:</strong>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="event-price">Rp.</span>
                                        </div>
                                        <input type="number" name="event_price" class="form-control" placeholder="Event Price" aria-describedby="event-price">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <div class="form-group w-50">
                                    <strong>Event Start:</strong>
                                    <input type="datetime-local" name="event_start" class="form-control" placeholder="Event Start">
                                </div>
                                <div class="form-group w-50 ml-4">
                                    <strong>Event End:</strong>
                                    <input type="datetime-local" name="event_end" class="form-control" placeholder="Event End">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <strong>Event Description</strong>
                                    <textarea class="form-control" name="event_description" rows="5" placeholder="Event Description"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-right pr-0">
                                <a class="btn btn-danger px-4" href="{{ route('home') }}">Back</a>
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
