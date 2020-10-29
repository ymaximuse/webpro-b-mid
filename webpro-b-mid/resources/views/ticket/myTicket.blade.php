@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
        <table class="table table-striped text-center">
            <thead class="table-info">
                <th>Code</th>
                <th>Name</th>
                <th>Purchase Time</th>
                <th>Event Time</th>
                <th>Used</th>
            </thead>
            <tbody>
                @foreach($my_ticket as $ticket => $t)
                <tr >
                    <td>{{$t->ticket_id}}</td>
                    <td>{{$t->event_name}}</td>
                    <td>{{$t->updated_at}}</td>
                    <td>{{$t->event_start}}</td>
                    <td>{{$t->used}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-striped">
                <thead class="text-left thead-dark">
                    <th>Code</th>
                    <th>Name</th>
                    <!-- <th class="col-xl">Jawaban</th> -->
                    <th>Purchase Date</th>
                    <th>Used</th>
                </thead>
                <tbody>
                    @foreach($my_ticket as $ticket => $t)
                    <tr class="text-left">
                        <td>{{$t->ticket_id}}</td>
                        <td>{{$t->event_name}}</td>
                        <td>{{$t->updated_at}}</td>
                        <td>{{$t->used}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-danger px-5" href="{{ url()->previous() }}">Back</a>
        </div>
    </div>
</div>
@endsection