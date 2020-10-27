@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('my-events.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div>
                        <div class="form-group">
                            <strong>Event Name:</strong>
                            <input type="text" name="event_name" class="form-control" placeholder="Event Name">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            <input type="text" name="event_price" class="form-control" placeholder="Event Price">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <strong>Event Start:</strong>
                            <input type="datetime-local" name="event_start" class="form-control" placeholder="Event Start">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <strong>Event End:</strong>
                            <input type="datetime-local" name="event_end" class="form-control" placeholder="Event End">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <a class="btn btn-primary" href="{{ url('/home') }}">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
