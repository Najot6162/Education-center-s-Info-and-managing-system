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
                <h2>Edit Teacher</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('teachs.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('teachs.update',$teach->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Teacher Name:</strong>
                    <input type="text" name="teacher_name" value="{{ $teach->teacher_name }}" class="form-control" placeholder="Teacher Name">
                    @error('teacher_name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Teacher Subject :</strong>
                    <input class="form-control" value="{{ $teach->teacher_subject }}" name="teacher_subject" placeholder="Teacher Subject">
                    @error('teacher_subject')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Teacher Certificate:</strong>
                    <input class="form-control" value="{{ $teach->teacher_certificate}}" name="teacher_certificate" placeholder="Teacher Certificate">
                    @error('teacher_certificate')
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
