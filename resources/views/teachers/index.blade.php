@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Younine</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Teachers List</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('teachs.create') }}"> Create New Teacher</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Teacher Name</th>
            <th>Teacher Subject</th>
            <th>Teacher Certificate</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($teachs as $teach)
            <tr>
                <td>{{ $teach->id }}</td>
                <td>{{ $teach->teacher_name }}</td>
                <td>{{ $teach->teacher_subject}}</td>
                <td>{{ $teach->teacher_certificate}}</td>
                <td>
                    <form action="{{ route('teachs.destroy',$teach->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('teachs.edit',$teach->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

{!! $teachs->links() !!}

</body>
</html>
@endsection
