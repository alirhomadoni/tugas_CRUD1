@extends('adminlte.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="1">No.</th>
            <th colspan="1">Judul</th>
            <th colspan="6">Pertanyaan </th>
            <th colspan="4">Actions</th>
          </tr>
        </thead>
        <tbody>
            
        @foreach($pertanyaan as $key => $item)
            <tr>
                <td colspan="1">{{$key+1}}</td>
                <td colspan="1">{{$item->judul}}</td>
                <td colspan="7">{{$item->isi}}
                <a class="btn btn-primary" href="/pertanyaan/{{$item->id}}/edit" role="button" method="GET">edit</a>
                </td>
                <td colspan ="3">
                    <form action="/jawaban/{{$item->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea type="textarea" class="form-control" name="isi" placeholder="Enter your answer" id="pertanyaan" rows='2' cols="2"></textarea>
                    </div>
                    <input type="hidden" name="pertanyaan_id" value="{{$item->id}}">
                    <button type="submit" class="btn btn-primary">Jawab</button>
                    </form>
                    </br>
                    <a class="btn btn-primary" href="/jawaban/{{$item->id}}" role="button" method="GET">lihat jawaban</a>
                    <a class="btn btn-primary" href="/pertanyaan/{{$item->id}}" role="button" method="GET">lihat detail pertanyaan</a>
                    <form action="pertanyaan/{{$item->id}}" method="POST" style="display : inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">delete</button>

                    </form>
                
                </td>
            
            </tr>
        @endforeach
 
        
        </tbody>
      </table>
    </div>
  </div>
  <a class="btn btn-primary" href="/pertanyaan/create" role="button">Buat Pertanyaan Baru</a>
</div>
@endsection('content')