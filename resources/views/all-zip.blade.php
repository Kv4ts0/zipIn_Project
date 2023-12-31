<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Zip</title>
</head>
<body>
    <form action="/zip/add" method="POST" enctype="multipart/form-data">
    @csrf
    <table border="2px">
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
        </tr>
        @endforeach
        <tr>
            <td><input type="text" name="name" placeholder="Zip Name"></td>
            <td><input type="text" name="location" placeholder="Zip Location"></td>
            <td><input class="form-control" type="file" name="image1" placeholder="Main image"></td>
            <td><input class="form-control" type="file" name="image2" placeholder="Second image"></td>
            <td><input class="form-control" type="file" name="image3" placeholder="Third image"></td>
            <td><input class="form-control" type="file" name="image4" placeholder="Fourth image"></td>
            <td><input type="number" name="price" placeholder="Price"></td>
            <td><input type="text" name="description" placeholder="Zip Description"></td>
            <td><button type="submit">Add</button></td>
        </tr>
    </table>
    </form>
</body>
</html>