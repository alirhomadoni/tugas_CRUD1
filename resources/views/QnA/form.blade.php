@extends('adminlte.master')
@section('content')
@section('content')
<form action="/pertanyaan" method="POST">
@csrf
 
  <div class="form-group">
    <label for="pertanyaan">pertanyaan:</label>
    <textarea type="textarea" class="form-control" name="isi" placeholder="Enter your question" id="pertanyaan" rows='3'></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
@endsection