@extends('layouts.app')

@section('content')
    <br>
    <br>
    <style>
        .table-bordered{
            margin-left: 200px;
            width: auto;
        }
    </style>
    <div class="pull-left" style="margin-left: 200px">
        <h2>Students List</h2>
    </div>
    <br>
<table class="table table-bordered">
    <tr>
        <th width="180px">S.No</th>
        <th width="180px">Name</th>
        <th width="180px">Email</th>
        <th width="180px">Subject</th>
        <th width="180px">Message</th>
        <th width="180px">Phone</th>
        <th width="180px">Action</th>
    </tr>
    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->email }}</td>
            <td>{{ $post->subject }}</td>
            <td>{{ $post->message }}</td>
            <td>{{$post->phone}}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

{{--                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>--}}

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection
