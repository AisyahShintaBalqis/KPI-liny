<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Form</title>    
  </head>
  <body>
    <div class="col-md-6 mx-auto mt-5 container">
      <div class="card">
        <div class="card-header bg-primary text-white">Form Input Data Dosen</div>
          <div class="card-body">
            <form action="{{route('store-lecturer')}}" method="POST">
              @csrf
              <div class="mb-3" class mt-5>
                <label for="exampleInputNidn" class="form-label">NIDN</label>                 
                <input type="text" name="nidn" class="form-control form-control-sm" id="exampleInputNidn" placeholder="NIDN">                    
              </div>
              <div class="mb-3">
                <label for="exampleInputname" class="form-label">Name</label>
                <input type="text" name="name" class="form-control form-control-sm" id="exampleInputname" placeholder="Name">
              </div>
              <div class="mb-3">
                <label for="exampleInputaddress" class="form-label">Address</label>
                <input type="text" name="address" class="form-control form-control-sm" id="exampleInputaddress" placeholder="Address">
              </div>
              <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control form-control-sm" id="exampleInputPhone" placeholder="Phone">
              </div>
              <div class="mb-3">
                <label for="exampleInputGender" class="form-label">Gender</label>
                <input type="text" name="gender" class="form-control form-control-sm" id="exampleInputGender" placeholder="Gender">
              </div>
 
   <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
      </div>
        </div> 
          </div>  
  </body>
</html> 