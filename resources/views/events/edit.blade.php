<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Younie</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Event</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('event.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('event.update',$event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Event Name:</strong>
                    <input type="text" name="event_name" value="{{ $event->event_name }}" class="form-control" placeholder="Event Name">
                    @error('event_name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Event Description:</strong>
                    <textarea class="form-control" style="height:150px" name="event_description" placeholder="Event Description">{{ $event->event_description }}</textarea>
                    @error('event_description')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Event Time:</strong>
                    <input class="form-control" value="{{ $event->event_time}}" name="event_time" placeholder="Event Time">
                    @error('event_time')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>

        </div>

    </form>
</div>

</body>
</html>
