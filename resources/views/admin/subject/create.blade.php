 @extends('backend.master')
 @section('content')

 <form action="{{route('subject.store')}}" method="POST">
  @csrf

  <div class="form-group">
    <label>Nama Dosen</label>
    <select class="form-control" name="lecturer_id">
    <option label="Pilih Dosen..."></option>

    @foreach ($lecturers as $item)
         
      <option value="{{$item->id}}">{{$item->name}}</option>
    
    @endforeach
    
  </select>
    
  </div>
  
  <div class="mb-3" class mt-5>
    <label for="exampleInputCode" class="form-label">Kode MK</label>                 
    <input type="text" name="code" class="form-control form-control-sm" id="exampleInputcode" placeholder="Code">                    
  </div>
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Nama Matakuliah</label>
    <input type="text" name="name" class="form-control form-control-sm" id="exampleInputname" placeholder="Name">
  </div>         


  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</div>
</div> 
</div> 
</form>

@endsection
