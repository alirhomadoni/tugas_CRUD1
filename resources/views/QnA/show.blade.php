@extends('adminlte.master')
@section('content')
<h2>Judul Pertanyaan : <h3>{{$pertanyaan->judul}}</h3></h2>
<h2>ISI PERTANYAAN : </h2>
<h2>{{$pertanyaan->isi}}<h2p>
<p>date of created : {{$pertanyaan->created_at}}</p>
<p>date of updated : {{$pertanyaan->updated_at}}</p>
<h2>jawaban :</2>
</br>

<?php
$url = $_SERVER["REQUEST_URI"];
$p_id = str_replace("/pertanyaan","", $url);
$filter = str_replace("/","", $p_id);

    for ($i=0; $i <count($jawaban) ; $i++) {
        if ($jawaban[$i]->pertanyaan_id==$filter){
        echo $jawaban[$i]->isi;
        echo "</br>"; 
        
        }
    }

?>

<a class="btn btn-primary" href="/pertanyaan" role="button">Kembali ke Index</a>
@endsection 