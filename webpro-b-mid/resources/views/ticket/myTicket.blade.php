@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-body">
        <table class="table table-striped text-center" height="100%">
            <thead class="table-info">
                <th>Code</th>
                <th>Name</th>
                <th>Purchase Time</th>
                <th>Event Time</th>
                <th>Used</th>
            </thead>
            <tbody>
                @foreach($my_ticket as $ticket => $t)
                <tr>
                    <td>{{$t->ticket_id}}</td>
                    <td>{{$t->event_name}}</td>
                    <td>{{$t->updated_at}}</td>
                    <td>{{$t->event_start}}</td>
                    <?php
                    if ($t->used) { ?>
                        <td valign="middle">
                            <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-check-circle-fill" fill="green" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </td>
                    <?php
                    } else {
                    ?>
                        <td valign="middle">
                            <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="red" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                            </svg>
                        </td>
                    <?php
                    }
                    ?>

                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-danger px-5" href="{{ url()->previous() }}">Back</a>
    </div>
    @endsection