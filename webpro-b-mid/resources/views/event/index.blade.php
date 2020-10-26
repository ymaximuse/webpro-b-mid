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
            
            <table class="table table-bordered table-responsive-lg">
                <tr>
                    <th>Event Name</th>
                    <th>Price</th>
                    <th>Event Start</th>
                    <th>Event End</th>
                </tr>
                @foreach ($events as $event)
                    <tr>
                        <td>{{$event->event_name}}</td>
                        <td>{{$event->event_price}}</td>
                        <td>{{$event->event_start}}</td>
                        <td>{{$event->event_end}}</td>
                        <td>
                            <form action="{{ route('my-events.edit', $event->event_id) }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('my-events.destroy', $event->event_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            
            {{ $events->links() }}

        </div>
    </div>
</div>
@endsection
