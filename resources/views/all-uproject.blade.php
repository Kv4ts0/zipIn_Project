<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Upcoming Projects</title>
    <style>
        tbody tr img{
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>Upcoming Projects</h2>
        </div>
    </div>

    <table class="table">
        <form action="{{ route('uprojects.all') }}">
        @csrf
        <tr>
            <td><input class="form-control" type="text" name="name" placeholder="Project Name"></td>
            <td><button class="btn btn-success" type="submit">Filter</button></td>
        </tr>
        </form>
        <tr>
            <th>Name</th>
            <th>Image1</th>
            <th>Image2</th>
            <th>Image3</th>
            <th>Image4</th>
            <th>Step1</th>
            <th>Step2</th>
            <th>Step3</th>
            <th>Step4</th>
            <th>Step5</th>
            <th>Description</th>
        </tr>
        <form action="{{ route('uprojects.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <tr>
            <td><input class="form-control" type="text" name="name" placeholder="Project Name"></td>
            <td><input input class="form-control"  class="form-control" type="file" name="image1" placeholder="Main image"></td>
            <td><input input class="form-control"  class="form-control" type="file" name="image2" placeholder="Second image"></td>
            <td><input input class="form-control"  class="form-control" type="file" name="image3" placeholder="Third image"></td>
            <td><input input class="form-control"  class="form-control" type="file" name="image4" placeholder="Fourth image"></td>
            <td><input class="form-control" type="text" name="step1" placeholder="Step 1"></td>
            <td><input class="form-control" type="text" name="step2" placeholder="Step 2"></td>
            <td><input class="form-control" type="text" name="step3" placeholder="Step 3"></td>
            <td><input class="form-control" type="text" name="step4" placeholder="Step 4"></td>
            <td><input class="form-control" type="text" name="step5" placeholder="Step 5"></td>
            <td><textarea class="form-control"  type="text" name="description" placeholder="Project Description"></textarea></td>
            <td><button class="btn btn-success" type="submit">Add</button></td>
            <td>#</td>
        </tr>
        </form>
        @foreach($uprojects as $uproject)
        <tr>
            <td>{{ $uproject->name }}</td>
            <td><img width=100px height="100px" src="/storage/uproject/{{$uproject->image1}}" alt=""></td>
            <td><img width=100px height="100px" src="/storage/uproject/{{$uproject->image2}}" alt=""></td>
            <td><img width=100px height="100px" src="/storage/uproject/{{$uproject->image3}}" alt=""></td>
            <td><img width=100px height="100px" src="/storage/uproject/{{$uproject->image4}}" alt=""></td>
            <td>{{ $uproject->step1 }}</td>
            <td>{{ $uproject->step2 }}</td>
            <td>{{ $uproject->step3 }}</td>
            <td>{{ $uproject->step4 }}</td>
            <td>{{ $uproject->step5 }}</td>
            <td><pre style="width: 400px">{{ $uproject->description }}</pre></td>
            <td>
                <form action="{{ route('uprojects.delete') }}" method="POST">
                @csrf
                    <input type="hidden" name="uproject_id" value="{{ $uproject->id }}">
                    <button class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('uprojects.edit',['id' => $uproject->id]) }}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>