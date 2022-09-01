<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
    <div class="container-fluid overflow-hidden p-0">
        @include('layouts.header.header ')
    </div>

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Employee</div>
        <div class="card-body">

            <form action="{{  url('/user/edit', ['id' => $emp['id']]) }}" method="post">
              {!! csrf_field() !!}
              @method("PATCH")
              <input type="hidden" name="id" id="id" value="{{$emp->id}}" id="id" />
              <label>Last Name</label></br>
              <input type="text" name="last_name" id="last_name" value="{{$emp->last_name}}" class="form-control"></br>
              <label>First Name</label></br>
              <input type="text" name="first_name" id="first_name" value="{{$emp->first_name}}" class="form-control"></br>
              <label>Middle Name</label></br>
              <input type="text" name="middle_name" id="middle_name" value="{{$emp->middle_name}}" class="form-control"></br>
              <label>Address</label></br>
              <input type="text" name="address" id="address" value="{{$emp->address}}" class="form-control"></br>
              <label>Salary</label></br>
              <input type="number" name="salary" id="salary" value="{{$emp->salary}}" class="form-control"></br>
              <input type="submit" value="Update" class="btn btn-success"></br>
          </form>

        </div>
      </div>
      <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
