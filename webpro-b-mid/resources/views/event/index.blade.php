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
                    <th>Event Place</th>
                    <th>Event Start</th>
                    <th>Event End</th>
                    <th>Price</th>
                    <th colspan=2>Action</th>
                </tr>
                @foreach ($events as $event)
                    <tr>
                        <td>{{$event->event_name}}</td>
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
                        <?php
                        } else {
                        ?>
                            <td colspan=2>
                                <a class="btn btn-primary" href="{{ route('buy-tickets', ['id' => $event->event_id]) }}">
                                    Buy Ticket
                                    <!-- @csrf -->
                                    <!-- <button type="submit" class="btn btn-primary">Buy Ticket</button> -->
                                </a>
                            </td>
                        <?php
                        }
                        ?>
                    </tr>
                @endforeach
            </table>
            
            {{ $events->links() }}
            <!-- <a class="btn btn-primary" href="{{'profile'}}">My Profile</a> -->
            <a class="btn btn-primary" href="{{'home'}}">Home</a>
            
        </div>
    </div>
</div>
@endsection