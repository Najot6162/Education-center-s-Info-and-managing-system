@extends('layouts.app')

@section('content')
<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Teacher List</h2>
            </div>
            <div class="row">
                <form action="" class="col-6">
                    <div class="form-group">
                        <input type="search" name="search" class="form-control" placeholder="Search By name " value="{{$search}}">
                    </div>
                    <br>
                    <button class="btn btn-primary">Search</button>
                    <a href="{{url('/teachs')}}">
                        <button class="btn btn-primary" type="button">Reset</button>
                    </a>
                </form>
                <div class="pull-right mb-2 col-3">
                    <a class="btn btn-success" href="{{ route('teachs.create') }}"> Create New Teacher</a>
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
            <th>Teacher Name</th>
            <th>Teacher Subject</th>
            <th>Teacher Certificate</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach ($teachs as $teach)

            <tr>
                <td>{{ $i}}</td>
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
            @php
            $i++;
            @endphp
        @endforeach
    </table>
    <div>
        {!! $teachs->links() !!}
    </div>
</div>
@endsection
