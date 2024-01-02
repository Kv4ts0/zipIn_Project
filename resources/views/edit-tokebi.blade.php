<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Edit Tokebis parki</title>
</head>
<body>
    <form action="{{ route('tokebi.update',['id' => $tokebi->id]) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="tokebi_id" value="{{ $tokebi->id }}" />
    @csrf
        <div class="card">
            <div class="card-header">
                <h3>Edit Tokebis park</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $tokebi->name }}"/>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
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
                </div>
                <div class="form-group">
                    <label for="image1">Main Image</label><br>
                    <td><img width="100px" height="100px" src="/storage/tokebi/{{$tokebi->image1}}" alt=""><br><input type="file" name="image1" placeholder="Main Image"></td><hr>
                </div>
                <div class="form-group">
                    <label for="image2">Second Image</label><br>
                    <td><img width="100px" height="100px" src="/storage/tokebi/{{$tokebi->image2}}" alt=""><br><input type="file" name="image2" placeholder="Second Image"></td><hr>
                </div>
                <div class="form-group">
                    <label for="image3">Third Image</label><br>
                    <td><img width="100px" height="100px" src="/storage/tokebi/{{$tokebi->image3}}" alt=""><br><input type="file" name="image3" placeholder="Third Image"></td><hr>
                </div>
                <div class="form-group">
                    <label for="image4">Fourth Image</label><br>
                    <td><img width="100px" height="100px" src="/storage/tokebi/{{$tokebi->image4}}" alt=""><br><input type="file" name="image4" placeholder="Fourth Image"></td><hr>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="price" value="{{ $tokebi->price }}"/>
                </div>
                <div class="form-group">
                    <label for="description">Description</label><br>
                    <textarea name="description" id="description" cols="30" style="width: 100%" rows="10">{{ $tokebi->description }}</textarea>
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