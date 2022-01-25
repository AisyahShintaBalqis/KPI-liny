<!-- <!doctype html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <title>Form</title>    
</head>
<body>
  <div class="col-md-6 mx-auto mt-5 container">
    <div class="card">
      <div class="card-header bg-primary text-white">Edit Data Dosen</div>
      <div class="card-body">
        <form action="{{route(('update-lecturer'),$lecturer->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="mb-3" class mt-5>
            <label for="exampleInputNidn" class="form-label">NIDN </label>                 
            <input value="{{$lecturer->nidn}}" type="text" name="nidn" class="form-control form-control-sm" id="exampleInputNidn" placeholder="NIDN">                    
          </div>
          <div class="mb-3">
            <label for="exampleInputname" class="form-label">Name</label>
            <input value="{{$lecturer->name}}" type="text" name="name" class="form-control form-control-sm" id="exampleInputname" placeholder="Name">
          </div>
          <div class="mb-3">
            <label for="exampleInputaddress" class="form-label">Address</label>
            <input value="{{$lecturer->address}}" type="text" name="address" class="form-control form-control-sm" id="exampleInputaddress" placeholder="Address">
          </div>
          <div class="mb-3">
            <label for="exampleInputPhone" class="form-label">Phone</label>
            <input value="{{$lecturer->phone}}" type="text" name="phone" class="form-control form-control-sm" id="exampleInputPhone" placeholder="Phone">
          </div>
          <div class="mb-3">
            <label for="exampleInputGender" class="form-label">Gender</label>
            <input value="{{$lecturer->gender}}" type="text" name="gender" class="form-control form-control-sm" id="exampleInputGender" placeholder="Gender">
          </div>
          
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div> 
</div>  
</body>
</html>  -->

@extends('backend.master')
@section('content')

<div class="col-md-6 mx-auto mt-5 container">
    <div class="card">
      <div class="card-header bg-primary text-white">Edit Data Dosen</div>
      <div class="card-body">
        <form action="{{route(('update-lecturer'),$lecturer->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="mb-3" class mt-5>
            <label for="exampleInputNidn" class="form-label">NIDN </label>                 
            <input value="{{$lecturer->nidn}}" type="text" name="nidn" class="form-control form-control-sm" id="exampleInputNidn" placeholder="NIDN">                    
          </div>
          <div class="mb-3">
            <label for="exampleInputname" class="form-label">Name</label>
            <input value="{{$lecturer->name}}" type="text" name="name" class="form-control form-control-sm" id="exampleInputname" placeholder="Name">
          </div>
          <div class="mb-3">
            <label for="exampleInputaddress" class="form-label">Address</label>
            <input value="{{$lecturer->address}}" type="text" name="address" class="form-control form-control-sm" id="exampleInputaddress" placeholder="Address">
          </div>
          <div class="mb-3">
            <label for="exampleInputPhone" class="form-label">Phone</label>
            <input value="{{$lecturer->phone}}" type="text" name="phone" class="form-control form-control-sm" id="exampleInputPhone" placeholder="Phone">
          </div>
          <div class="mb-3">
            <label for="exampleInputGender" class="form-label">Gender</label>
            <input value="{{$lecturer->gender}}" type="text" name="gender" class="form-control form-control-sm" id="exampleInputGender" placeholder="Gender">
          </div>
          
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div> 
</div> 

@endsection