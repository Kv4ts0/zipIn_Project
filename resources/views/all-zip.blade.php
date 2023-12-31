<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>All Zip</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>Ziplines</h2>
        </div>
    </div>
    <form action="/zip/add" method="POST" enctype="multipart/form-data">
    @csrf
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Image1</th>
            <th>Image2</th>
            <th>Image3</th>
            <th>Image4</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
        <tr>
            <td><input class="form-control" type="text" name="name" placeholder="Zip Name"></td>
            <td><input input class="form-control"  type="text" name="location" placeholder="Zip Location"></td>
            <td><input input class="form-control"  class="form-control" type="file" name="image1" placeholder="Main image"></td>
            <td><input input class="form-control"  class="form-control" type="file" name="image2" placeholder="Second image"></td>
            <td><input input class="form-control"  class="form-control" type="file" name="image3" placeholder="Third image"></td>
            <td><input input class="form-control"  class="form-control" type="file" name="image4" placeholder="Fourth image"></td>
            <td><input input class="form-control"  type="number" name="price" placeholder="Price"></td>
            <td><input input class="form-control"  type="text" name="description" placeholder="Zip Description"></td>
            <td><button class="btn btn-success" type="submit">Add</button></td>
            <td>#</td>
        </tr>
        </form>
        @foreach($zips as $zip)
        <tr>
            <td>{{ $zip->name }}</td>
            <td>{{ $zip->location }}</td>
            <td><img width=100px height="100px" src="/storage/zip/{{$zip->image1}}" alt=""></td>
            <td><img width=100px height="100px" src="/storage/zip/{{$zip->image2}}" alt=""></td>
            <td><img width=100px height="100px" src="/storage/zip/{{$zip->image3}}" alt=""></td>
            <td><img width=100px height="100px" src="/storage/zip/{{$zip->image4}}" alt=""></td>
            <td>{{ $zip->price }}</td>
            <td>{{ $zip->description }}</td>
            <td>
                <form action="/zip/delete" method="POST">
                @csrf
                    <input type="hidden" name="zip_id" value="{{ $zip->id }}">
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>