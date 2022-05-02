@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">

            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Student List</h2>
                </div>
                <div class="row">
                    <form action="" class="col-6">
                        <div class="form-group">
                            <input type="search" name="search" class="form-control" placeholder="Search By name " value="{{$search}}">
                        </div>
                        <br>
                        <button class="btn btn-primary">Search</button>
                        <a href="{{url('/posts')}}">
                            <button class="btn btn-primary" type="button">Reset</button>
                        </a>
                    </form>
                </div>
            </div>
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
    @php
        $i = 1;
    @endphp
    @foreach ($posts as $post)
        <tr>
            <td>{{ $i }}</td>
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
        @php
            $i ++;
        @endphp
    @endforeach
</table>
    </div>
    <div>
        {!! $posts->links() !!}
    </div>
@endsection
