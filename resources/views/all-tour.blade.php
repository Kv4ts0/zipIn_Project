<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>All Tour</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>Tours</h2>
        </div>
    </div>

    <table class="table">
        <form action="{{ route('tours.all') }}">
        @csrf
        <tr>
            <td><input class="form-control" type="text" name="name" placeholder="Tour Name"></td>
            <td>
            <select class="form-control" name="location" id="location">
                <option value="" disabled selected hidden>Location</option>
                <option value="{{ implode(['location' => 'Tbilisi']) }}">Tbilisi</option>
                <option value="{{ implode(['location' => 'Imereti']) }}">Imereti</option>
                <option value="{{ implode(['location' => 'Adjaria']) }}">Adjaria</option>
                <option value="{{ implode(['location' => 'Kvemo Kartli']) }}">Kvemo Kartli</option>
                <option value="{{ implode(['location' => 'Samegrelo / Svaneti']) }}">Samegrelo / Svaneti</option>
                <option value="{{ implode(['location' => 'Kakheti']) }}">Kakheti</option>
                <option value="{{ implode(['location' => 'Shida Kartli']) }}">Shida Kartli</option>
                <option value="{{ implode(['location' => 'Abkhazia']) }}">Abkhazia</option>
                <option value="{{ implode(['location' => 'Samtskhe-Javakheti']) }}">Samtskhe-Javakheti</option>
                <option value="{{ implode(['location' => 'Guria']) }}">Guria</option>
                <option value="{{ implode(['location' => 'Mtskheta-Mtianeti']) }}">Mtskheta-Mtianeti</option>
                <option value="{{ implode(['location' => 'Racha-Lechkhumi and Kvemo Svaneti']) }}">Racha-Lechkhumi and Kvemo Svaneti</option>
            </select>
            </td>
            <td><input input class="form-control"  type="number" name="min_price" placeholder="Min Price"></td>
            <td><input input class="form-control"  type="number" name="max_price" placeholder="Max Price"></td>
            <td><button class="btn btn-success" type="submit">Filter</button></td>
        </tr>
        </form>
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
        <form action="{{ route('tours.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <tr>
            <td><input class="form-control" type="text" name="name" placeholder="Tour Name"></td>
            <td>
            <select class="form-control" name="location" id="location">
                <option value="" disabled selected hidden>Location</option>
                <option value="{{ implode(['location' => 'Tbilisi']) }}">Tbilisi</option>
                <option value="{{ implode(['location' => 'Imereti']) }}">Imereti</option>
                <option value="{{ implode(['location' => 'Adjaria']) }}">Adjaria</option>
                <option value="{{ implode(['location' => 'Kvemo Kartli']) }}">Kvemo Kartli</option>
                <option value="{{ implode(['location' => 'Samegrelo / Svaneti']) }}">Samegrelo / Svaneti</option>
                <option value="{{ implode(['location' => 'Kakheti']) }}">Kakheti</option>
                <option value="{{ implode(['location' => 'Shida Kartli']) }}">Shida Kartli</option>
                <option value="{{ implode(['location' => 'Abkhazia']) }}">Abkhazia</option>
                <option value="{{ implode(['location' => 'Samtskhe-Javakheti']) }}">Samtskhe-Javakheti</option>
                <option value="{{ implode(['location' => 'Guria']) }}">Guria</option>
                <option value="{{ implode(['location' => 'Mtskheta-Mtianeti']) }}">Mtskheta-Mtianeti</option>
                <option value="{{ implode(['location' => 'Racha-Lechkhumi and Kvemo Svaneti']) }}">Racha-Lechkhumi and Kvemo Svaneti</option>
            </select>
            </td>
            <td><input input class="form-control" type="file" name="image1" placeholder="Main image"></td>
            <td><input input class="form-control" type="file" name="image2" placeholder="Second image"></td>
            <td><input input class="form-control" type="file" name="image3" placeholder="Third image"></td>
            <td><input input class="form-control" type="file" name="image4" placeholder="Fourth image"></td>
            <td width='100px'><input  class="form-control"  type="number" name="price" placeholder="Price"></td>
            <td><textarea class="form-control"  type="text" name="description"> </textarea></td>
            <td><button class="btn btn-success" type="submit">Add</button></td>
            <td>#</td>
        </tr>
        </form>
        @foreach($tours as $tour)
        <tr>
            <td>{{ $tour->name }}</td>
            <td>{{ $tour->location }}</td>
            <td><img width=100px height="100px" src="/storage/tour/{{$tour->image1}}" alt=""></td>
            <td><img width=100px height="100px" src="/storage/tour/{{$tour->image2}}" alt=""></td>
            <td><img width=100px height="100px" src="/storage/tour/{{$tour->image3}}" alt=""></td>
            <td><img width=100px height="100px" src="/storage/tour/{{$tour->image4}}" alt=""></td>
            <td>{{ $tour->price }}</td>
            <td><pre style="width: 600px">{{ $tour->description }}</pre></td>
            <td>
                <form action="{{ route('tours.delete') }}" method="POST">
                @csrf
                    <input type="hidden" name="tour_id" value="{{ $tour->id }}">
                    <button class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('tours.edit',['id' => $tour->id]) }}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>