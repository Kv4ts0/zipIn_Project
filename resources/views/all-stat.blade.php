<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>All Stat</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>Stats</h2>
        </div>
    </div>

    <table class="table">
        <form action="{{ route('stats.all') }}">
        @csrf
        <tr>
            <td><input class="form-control" type="number" name="id" placeholder="Stat ID"></td>
            <td><input class="form-control" type="text" name="name" placeholder="Stat Name"></td>
            <td><button class="btn btn-success" type="submit">Filter</button></td>
        </tr>
        </form>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>Image</th>
        </tr>
        <form action="{{ route('stats.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <tr>
            <td>#</td>
            <td><input class="form-control" type="text" name="name" placeholder="Stat name"></td>
            <td><input class="form-control" type="number" name="number" placeholder="Stat Number"></td>
            <td><input input class="form-control"  class="form-control" type="file" name="statimage" placeholder="Stat image"></td>
            <td><button class="btn btn-success" type="submit">Add</button></td>
            <td>#</td>
        </tr>
        </form>
        @foreach($stats as $stat)
        <tr>
            <td>{{ $stat->id }}</td>
            <td>{{ $stat->name }}</td>
            <td>{{ $stat->number }}</td>
            <td><img width=100px height="100px" src="/storage/stat/{{$stat->statimage}}" alt=""></td>
            <td>
                <form action="{{ route('stats.delete') }}" method="POST">
                @csrf
                    <input type="hidden" name="stat_id" value="{{ $stat->id }}">
                    <button class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('stats.edit',['id' => $stat->id]) }}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>