<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">City</label>
                        <input type="text" name="city" id="city" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Mark</label>
                        <input type="number" name="mark" id="mark" class="form-control">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </div>
                    @if(session()->has('status'))
                    <div class="alert alert-warning mt-2" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                </form>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->city}}</td>
                                <td>{{$student->mark}}</td>
                                <td>
                                    <a href="{{url('/edit',[$student->id])}}" class="btn btn-info">Edit</a>
                                    <a href="{{url('/delete',$student->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>