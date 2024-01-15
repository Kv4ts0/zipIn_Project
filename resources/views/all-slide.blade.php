<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>All Slide</title>
    <style>
        tbody tr img{
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>Slides</h2>
        </div>
    </div>

    <table class="table">
        <form action="{{ route('slides.all') }}">
        @csrf
        <tr>
            <td><input class="form-control" type="number" name="id" placeholder="Slide ID"></td>
            <td><input class="form-control" type="text" name="title" placeholder="Slide Title"></td>
            <td><button class="btn btn-success" type="submit">Filter</button></td>
        </tr>
        </form>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Image</th>
            <th>Description</th>
        </tr>
        <form action="{{ route('slides.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <tr>
            <td>#</td>
            <td><input class="form-control" type="text" name="title" placeholder="Slide Title"></td>
            <td><input class="form-control" type="text" name="subtitle" placeholder="Slide Subtitle"></td>
            <td><input input class="form-control"  class="form-control" type="file" name="slideimage" placeholder="Slide image"></td>
            <td><input input class="form-control"  type="text" name="description" placeholder="Slide Description"></td>
            <td><button class="btn btn-success" type="submit">Add</button></td>
            <td>#</td>
        </tr>
        </form>
        @foreach($slides as $slide)
        <tr>
            <td>{{ $slide->id }}</td>
            <td>{{ $slide->title }}</td>
            <td>{{ $slide->subtitle }}</td>
            <td><img width=100px height="100px" src="/storage/slide/{{$slide->slideimage}}" alt=""></td>
            <td>{{ $slide->description }}</td>
            <td>
                <form action="{{ route('slides.delete') }}" method="POST">
                @csrf
                    <input type="hidden" name="slide_id" value="{{ $slide->id }}">
                    <button class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('slides.edit',['id' => $slide->id]) }}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>