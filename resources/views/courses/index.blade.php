@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Younine</title>

        {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >--}}
</head>
<body>

<div class="container mt-2">

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Course List</h2>
            </div>
            <div class="row">
                <form action="" class="col-6">
                    <div class="form-group">
                        <input type="search" name="search" class="form-control" placeholder="Search By name " value="{{$search}}">
                    </div>
                    <br>
                    <button class="btn btn-primary">Search</button>
                    <a href="{{url('/courses')}}">
                        <button class="btn btn-primary" type="button">Reset</button>
                    </a>
                </form>
                <div class="pull-right mb-2 col-3">
                    <a class="btn btn-success" href="{{ route('courses.create') }}"> Create New Course</a>
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
            <th>Course Date</th>
            <th>Course Name</th>
            <th>Course Description</th>
            <th>Course Price</th>
            <th width="280px">Action</th>
        </tr>
        @php
        $i = 1;
        @endphp
        @foreach ($courses as $course)
            <tr>
                <td>{{ $i}}</td>
                <td>{{ $course->course_date }}</td>
                <td>{{ $course->course_name }}</td>
                <td>{{ $course->course_description }}</td>
                <td>{{ $course->course_price }}</td>
                <td>
                    <form action="{{ route('courses.destroy',$course->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('courses.edit',$course->id) }}">Edit</a>

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

    <div class="row">
        {{ $courses->links() }}
    </div>
</div>

</body>
</html>

@endsection
