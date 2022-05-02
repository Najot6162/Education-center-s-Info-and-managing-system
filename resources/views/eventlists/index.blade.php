@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Younie</title>

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >--}}
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>EventList List</h2>
            </div>
            <div class="row">
                <form action="" class="col-6">
                    <div class="form-group">
                        <input type="search" name="search" class="form-control" placeholder="Search By name " value="{{$search}}">
                    </div>
                    <br>
                    <button class="btn btn-primary">Search</button>
                    <a href="{{url('/eventlist')}}">
                        <button class="btn btn-primary" type="button">Reset</button>
                    </a>
                </form>
                <div class="pull-right mb-2 col-3">
                    <a class="btn btn-success" href="{{ route('eventlist.create') }}"> Create New Event</a>
                </div>
            </div>

        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Event Name</th>
            <th>Event Time</th>
            <th>Event Room</th>
            <th width="280px">Action</th>
        </tr>

        @php
        $i = 1;
        @endphp
        @foreach ($eventlists as $eventlist)
            <tr>
                <td>{{ $i}}</td>
                <td>{{ $eventlist->event_name }}</td>
                <td>{{ $eventlist->event_time }}</td>
                <td>{{$eventlist->event_room}}</td>
                <td>
                    <form action="{{ route('eventlist.destroy',$eventlist->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('eventlist.edit',$eventlist->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @php
            $i++;
            @endphp
        @endforeach
    </table>

{!! $eventlists->links() !!}

</body>
</html>

@endsection
