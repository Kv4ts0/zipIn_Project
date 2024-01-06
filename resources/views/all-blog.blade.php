<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>All Blog</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>Blogs</h2>
        </div>
    </div>

    <table class="table">
        <form action="{{ route('blogs.all') }}">
        @csrf
        <tr>
            <td><input class="form-control" type="number" name="id" placeholder="Blog ID"></td>
            <td><input class="form-control" type="text" name="name" placeholder="Blog Name"></td>
            <td><button class="btn btn-success" type="submit">Filter</button></td>
        </tr>
        </form>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
        </tr>
        <form action="{{ route('blogs.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <tr>
            <td>#</td>
            <td><input class="form-control" type="text" name="name" placeholder="Blog Name"></td>
            <td><input class="form-control"  class="form-control" type="file" name="blogimage" placeholder="Blog image"></td>
            <td><textarea class="form-control" name="description"></textarea></td>
            <td><button class="btn btn-success" type="submit">Add</button></td>
            <td>#</td>
        </tr>
        </form>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->name }}</td>
            <td><img width=100px height="100px" src="/storage/blog/{{$blog->blogimage}}" alt=""></td>
            <td>{{ $blog->description }}</td>
            <td>
                <form action="{{ route('blogs.delete') }}" method="POST">
                @csrf
                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                    <button class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('blogs.edit',['id' => $blog->id]) }}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>