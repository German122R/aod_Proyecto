@extends('layouts.dashboard')

@section('content')

<!--<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}"> -->

<div class= "container"></div>
<br><br>

<div class="card">
<div class="card-header">
<div class="row">
<div class="col-md-8">
     <h2 class="card-title">Listado de celulares registrado en la base de datos</h2>
</div>
<div class="col-md-4">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<span onclick="exportPhonesToCSV(event.target)"  data-href= "/exportPhonesToCSV" id="export" class ="btn btn-info">Exportar a CSV<span>
<a class="btn btn-primary" href="{{route('phones.create')}}"> +Nuevo</a>

</div>
</div>
</div>
</div>


  <div class="card-body">

<table class="table  table-striped">

<thead>
<tr>
<th>Phone</th>
    <th>Informacion</th>
    <th>Description</th>
   
</tr>
   
</thead>

<tbody>
@forelse ($phones as $phone)
<tr>
<td>
<a class="btn btn-info btn- small" href="{{ route('phones.show', $phone->id) }}">
<h4>{{$phone->brand}} {{$phone->model}}</h4></td>
</a>
<td>

<p><b>Modelo:</b>{{$phone->brand}}</p>
<p><b>Color:</b>{{$phone->color}}</p>
<p><b>cuntos chips:</b>{{$phone->chip}}</p>
<p><b>Numero de memorias:</b>{{$phone->memory}}</p>

</td>
<td><p>{{ $phone->description}}</p></td>

@empty
<h1>La tabla no tiene datos</h1>
</tr>
@endforelse
</tbody>
</table>
   
  </div>
</div>

</div>


<script>

function  exportPhonesToCSV(_this){
  let _url = $(_this).data('href');
  window.location.href = _url;
}
</script>
@endsection