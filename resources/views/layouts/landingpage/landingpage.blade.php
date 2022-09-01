<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Detail</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
    <div class="container-fluid overflow-hidden p-0">
        @include('layouts.header.header ')
    </div>
<h2>Employee Details</h2>
<button type="button" class="btn btn-success btn-sm ms-5 mt-5"><a href="/user/create" style="color:aliceblue">Add New</a></button>
    <div class="container table-responsive py-2">
        <table class="table table-bordered table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Last Name</th>
              <th scope="col">First Name</th>
              <th scope="col">Middle Name</th>
              <th scope="col">Address</th>
              <th scope="col">Salary</th>
              <th scope="col">Action</th>
            </tr>
            @foreach ($employees as $emp )
          </thead>
          <tr>
            <td>{{$emp['id']}}</td>
            <td>{{$emp['last_name']}}</td>
            <td>{{$emp['first_name']}}</td>
            <td>{{$emp['middle_name']}}</td>
            <td>{{$emp['address']}}</td>
            <td>${{$emp['salary']}}</td>
            <td colspan="2"><button type="button" class="btn btn-success btn-sm"><a href="{{ url('/edit', ['id' => $emp['id']]) }}" style="color:aliceblue ">Update</a></button> <button type="button" class="btn btn-danger btn-sm"><a href="{{ url('/user', ['id' => $emp['id']])}}">Delete</a></button></td>
          </tr>
        @endforeach
        </table>
        </div>
    <div class="container-fluid overflow-hidden p-0">
        @include('layouts.footer.footer')
    </div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
