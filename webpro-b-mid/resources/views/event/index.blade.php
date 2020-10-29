@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            
            <table class="table table-bordered table-responsive-lg text-center">
                <tr class="table-info">
                    <th>Event Name</th>
                    <th>Event Place</th>
                    <th>Event Start</th>
                    <th>Event End</th>
                    <th>Price</th>
                    <th colspan=3>Action</th>
                </tr>
                @foreach ($events as $event)
                    <tr>
                        <td>
                            <a href="{{ route('event-detail', $event->event_id) }}">
                                {{$event->event_name}}
                            </a>
                        </td>
                        <td>{{$event->event_place}}</td>
                        <td>{{$event->event_start}}</td>
                        <td>{{$event->event_end}}</td>
                        <td>{{$event->event_price}}</td>
                        <?php
                        $user = Auth::user()->id;
                        $organizer = $event->event_organizer;
                        if($user == $organizer)
                        {?>
                            <td>
                                <form action="{{ route('my-events.edit', $event->event_id) }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-primary w-100">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('my-events.destroy', $event->event_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">Delete</button>
                                </form>
                            </td>
                        <?php
                        } else {
                        ?>
                            <td colspan=3>
                                <a class="btn btn-primary" href="{{ route('buy-tickets', ['id' => $event->event_id]) }}">
                                    Buy Ticket
                                </a>
                            </td>
                        <?php
                        }
                        ?>
                    </tr>
                @endforeach
            </table>
            
            {{ $events->links() }}
            <a class="btn btn-danger px-5" href="{{ route('home') }}">Home</a>
            
        </div>
    </div>
</div>
@endsection
