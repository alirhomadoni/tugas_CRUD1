@extends('adminlte.master')
@section('content')
<h1>ini edit</h1>
<form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
@csrf
@method('PUT')
 
  <div class="form-group">
  <label for="judul">judul:</label>
    <input type="textarea" class="form-control" value ="{{$pertanyaan->judul}}" name="judul"  id="pertanyaan" rows='1'>
    <label for="pertanyaan">pertanyaan:</label>
    <input type="textarea" class="form-control" value="{{$pertanyaan->isi}}" name="isi" id="pertanyaan" rows='3'></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection