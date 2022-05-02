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
                <h2>Event List</h2>
            </div>
            <div class="row">
                <form action="" class="col-6">
                    <div class="form-group">
                        <input type="search" name="search" class="form-control" placeholder="Search By name " value="{{$search}}">
                    </div>
                    <br>
                    <button class="btn btn-primary">Search</button>
                    <a href="{{url('/event')}}">
                        <button class="btn btn-primary" type="button">Reset</button>
                    </a>
                </form>
                <div class="pull-right mb-2 col-3">
                    <a class="btn btn-success" href="{{ route('event.create') }}"> Create New Event</a>
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
            <th>Event Description</th>
            <th>Event Time</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach ($events as $event)
            <tr>
                <td>{{ $i}}</td>
                <td>{{ $event->event_name }}</td>
                <td>{{ $event->event_description }}</td>
                <td>{{ $event->event_time}}</td>
                <td>
                    <form action="{{ route('event.destroy',$event->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('event.edit',$event->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @php
            $i++
            @endphp
        @endforeach
    </table>

{!! $events->links() !!}

</body>
</html>

@endsection

