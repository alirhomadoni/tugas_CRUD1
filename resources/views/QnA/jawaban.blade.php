@extends('adminlte.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="1">No.</th>
            <th colspan="7">Jawaban</th>
            <th colspan="3">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $url = $_SERVER["REQUEST_URI"];
        $p_id = str_replace("/jawaban","", $url);
        $filter = str_replace("/","", $p_id);
        $num=1;
        ?>

        @foreach($jawaban as $key => $item)

        <?php 
        if ($item->pertanyaan_id==$filter){ ?>
            <tr>
                <td colspan="1">{{$num}}</td>
                <td colspan="7">{{$item->isi}}</td>
                <td colspan ="3">
                </td>
            
            </tr>
        <?php 
      $num++;
      } ?>
        @endforeach
        
         </tbody>
      </table>
    </div>
  </div>
  </br>
        <a class="btn btn-primary" href="/pertanyaan/create" role="button" method="GET">Buat Pertanyaan Baru</a>
        <a class="btn btn-primary" href="/pertanyaan" role="button" method="GET">List Pertanyaan</a>
       
</div>
@endsection('content')