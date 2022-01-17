<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Form</title>    
  </head>
  <body>
 





    <div class="col-md-6 mx-auto mt-5 container">
      <div class="card">
        <div class="card-header bg-primary text-white">Data Dosen</div>
   @if(session('status'))

           <script>

    Swal.fire({
  
  icon: 'success',
  title: 'Sukses',
  text : "{{session('status')}}",
  
  
});
    </script>
      @endif  

          <div class="card-body">
           <table class="table table-hover" method="POST">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIDN</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
   
  
@foreach ($lecturers as $index=>$item)

    <tr>
      <th scope="row">{{$index + 1}}</th>
      <td>{{$item->nidn}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->gender}}</td>
    </tr>  
    @endforeach  
  </tbody>
</table>
    </div>
      </div>
        </div> 
          </div>  
  </body>
</html> 