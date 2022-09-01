<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
    <div class="container-fluid overflow-hidden p-0">
        @include('layouts.header.header ')
    </div>
    <h2>New Employee</h2>
    <div class="card" style="margin:20px;">
        <div class="card-header">New Form</div>
        <div class="card-body">

            <form action="{{ url('user') }}" method="post">
                @csrf
              <label>Last Name</label></br>
              <input type="text" name="last_name" id="last_name" class="form-control"></br>
              <label>First Name</label></br>
              <input type="text" name="first_name" id="first_name" class="form-control"></br>
              <label>Middle Name</label></br>
              <input type="text" name="middle_name" id="middle_name" class="form-control"></br>
              <label>Address</label></br>
              <input type="text" name="address" id="address" class="form-control"></br>
              <label>Salary</label></br>
              <input type="number" name="salary" id="salary" class="form-control"></br>
              <input type="submit" value="Save" class="btn btn-success btn-sm pr-5"> <button type="button" class="btn btn-success btn-sm"><a href="/user" style="color:aliceblue">Back</a></button>
          </form>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
