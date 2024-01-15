<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Edit Upcoming Project</title>
    <style>
        tbody tr img{
            object-fit: cover;
        }
    </style>
</head>
<body>
    <form action="{{ route('uprojects.update',['id' => $uproject->id]) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="uproject_id" value="{{ $uproject->id }}" />
    @csrf
        <div class="card">
            <div class="card-header">
                <h3>Edit Upcoming Project</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $uproject->name }}"/>
                </div>
                <div class="form-group">
                    <label for="image1">Main Image</label><br>
                    <td><img width="100px" height="100px" src="/storage/uproject/{{$uproject->image1}}" alt=""><br><input type="file" name="image1" placeholder="Main Image"></td><hr>
                </div>
                <div class="form-group">
                    <label for="image2">Second Image</label><br>
                    <td><img width="100px" height="100px" src="/storage/uproject/{{$uproject->image2}}" alt=""><br><input type="file" name="image2" placeholder="Second Image"></td><hr>
                </div>
                <div class="form-group">
                    <label for="image3">Third Image</label><br>
                    <td><img width="100px" height="100px" src="/storage/uproject/{{$uproject->image3}}" alt=""><br><input type="file" name="image3" placeholder="Third Image"></td><hr>
                </div>
                <div class="form-group">
                    <label for="image4">Fourth Image</label><br>
                    <td><img width="100px" height="100px" src="/storage/uproject/{{$uproject->image4}}" alt=""><br><input type="file" name="image4" placeholder="Fourth Image"></td><hr>
                </div>
                <div class="form-group">
                    <label for="step1">Step 1</label>
                    <input type="text" class="form-control" name="step1" id="step1" value="{{ $uproject->step1 }}"/>
                </div>
                <div class="form-group">
                    <label for="step2">Step 2</label>
                    <input type="text" class="form-control" name="step2" id="step2" value="{{ $uproject->step2 }}"/>
                </div>
                <div class="form-group">
                    <label for="step3">Step 3</label>
                    <input type="text" class="form-control" name="step3" id="step3" value="{{ $uproject->step3 }}"/>
                </div>
                <div class="form-group">
                    <label for="step4">Step 4</label>
                    <input type="text" class="form-control" name="step4" id="step4" value="{{ $uproject->step4 }}"/>
                </div>
                <div class="form-group">
                    <label for="step5">Step 5</label>
                    <input type="text" class="form-control" name="step5" id="step5" value="{{ $uproject->step5 }}"/>
                </div>
                <div class="form-group">
                    <label for="description">Description</label><br>
                    <textarea name="description" id="description" cols="30" style="width: 100%" rows="10">{{ $uproject->description }}</textarea>
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