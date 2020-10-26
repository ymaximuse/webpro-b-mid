@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{Auth::user()->name}}</h1>
    <h1>{{Auth::user()->email}}</h1>

    <a class = "btn btn-primary" href="{{'my-tickets'}}">My Tickets</a>
</div>
@endsection