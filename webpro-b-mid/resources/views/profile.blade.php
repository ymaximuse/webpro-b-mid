@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Your Profile
                </div>
                <div class="card-body">
                    <h1>{{Auth::user()->name}}</h1>
                    <p><b>Email address:</b> {{Auth::user()->email}}</p>
                    <hr>
                    <div class="mx-auto text-center">
                        <a class="btn btn-danger px-5" href="{{ url()->previous() }}">Back</a>
                        <a class = "btn btn-success px-5 ml-5" href="{{'my-tickets'}}">My Tickets</a>
                        <a class = "btn btn-success px-5 ml-5" href="{{'my-events'}}">My Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection