 @extends('backend.master')
    @section('content') 

    @if(session('status'))

    <script>

      Swal.fire({
        
        icon: 'success',
        title: 'Sukses',
        text : "{{session('status')}}",
        
      });
    </script>
    @endif  

    <a class="btn btn-success" href="{{route('create-lecturer')}}">Tambah Data</a>

    <div class="card-body">   

      


     <table class="table table-hover" method="POST">
      <thead> 
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kode_MK</th>
          <th scope="col">Mata Kuliah</th>
          <th scope="col">Nama Dosen</th>          
          <th scope="col">Action</th>
        </tr>
      </thead> 
      <tbody> 
       
        
       @foreach ($subject as $index=>$item)
       
       <tr>
        <th scope="row">{{$index + 1}}</th>
        <td>{{$item->code}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->lecturer_id}}</td>
        
        
        <td>
          <a class="btn btn-success" href="{{route('edit-lecturer',$item->id)}}">Edit</a>

          
          <form action="{{route('delete-lecturer',$item->id)}}" method="POST" class="form-check-inline" >
            
            @csrf
            @method('DELETE')       

            <button onclick="return confirm('Hapus Data ? ')" class="btn btn-danger" type="submit">Hapus</a></button>
            
          </form>
          
        </td>
      </tr>  
      @endforeach

    </tbody> 
  </table>


</div>



@endsection