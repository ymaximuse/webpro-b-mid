@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <a class = "btn btn-primary" href="{{route('profile')}}">My Profile</a>
                <a class = "btn btn-primary" href="{{route('my-events.index')}}">Events</a>
                <a class = "btn btn-primary" href="{{route('my-events.create')}}">Create new event</a>
            </div>
        </div>
    </div>
</div>
@endsection
