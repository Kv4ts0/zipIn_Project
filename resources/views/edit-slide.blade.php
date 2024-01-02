<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Edit Slide</title>
</head>
<body>
    <form action="{{ route('slides.update',['id' => $slide->id]) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="slide_id" value="{{ $slide->id }}" />
    @csrf
        <div class="card">
            <div class="card-header">
                <h3>Edit Slide</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $slide->title }}"/>
                </div>
                <div class="form-group">
                    <label for="subtitle">Subtitle</label>
                    <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{ $slide->subtitle }}"/>
                </div>
                <div class="form-group">
                    <label for="slideimage">Slide Image</label><br>
                    <td><img width="100px" height="100px" src="/storage/slide/{{$slide->slideimage}}" alt=""><br><input type="file" name="slideimage" placeholder="Slide Image"></td><hr>
                </div>
                <div class="form-group">
                    <label for="description">Slide Description</label><br>
                    <textarea name="description" id="description" cols="30" style="width: 100%" rows="10">{{ $slide->description }}</textarea>
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