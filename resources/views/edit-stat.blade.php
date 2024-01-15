<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Edit Stat</title>
    <style>
        tbody tr img{
            object-fit: cover;
        }
    </style>
</head>
<body>
    <form action="{{ route('stats.update',['id' => $stat->id]) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="stat_id" value="{{ $stat->id }}" />
    @csrf
        <div class="card">
            <div class="card-header">
                <h3>Edit Stat</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $stat->name }}"/>
                </div>
                <div class="form-group">
                    <label for="number">Number</label>
                    <input type="number" class="form-control" name="number" id="number" value="{{ $stat->number }}"/>
                </div>
                <div class="form-group">
                    <label for="statimage">Stat Image</label><br>
                    <td><img width="100px" height="100px" src="/storage/stat/{{$stat->statimage}}" alt=""><br><input type="file" name="statimage" placeholder="Stat Image"></td><hr>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Save</button>
                    <button class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>