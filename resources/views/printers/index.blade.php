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
<span onclick="exportPrintersToCSV(event.target)"  data-href= "/exportPrintersToCSV" id="export" class ="btn btn-info">Exportar a CSV<span>
<a class="btn btn-primary" href="{{route('printers.create')}}"> +Nuevo</a>

</div>
</div>
</div>
</div>


  <div class="card-body">

<table class="table  table-striped">

<thead>
<tr>
<th>Impresoras</th>
    <th>Informacion</th>
    <th>Description</th>
    <th>Acciones</th>
</tr>
   
</thead>

<tbody>
@forelse ($printers as $printer)
<tr>
<td>
<a class="btn btn-info btn- small" href="{{ route('printers.show', $printer->id) }}">
<h4>{{$printer->brand}} {{$printer->model}}</h4></td>
</a>
<td>

<p><b>Modelo:</b>{{$printer->brand}}</p>
<p><b>Modelo:</b>{{$printer->model}}</p>
<p><b>Color:</b>{{$printer->color}}</p>
<p><b>Conecion:</b>{{$printer->connectivity}}</p>
<p><b>Numero de patas que tiene la impresora:</b>{{$printer->keys}}</p>

</td>
<td><p>{{ $printer->description}}</p></td>
<td>ver|editar| eliminar</td>
@empty
<h1>La tabla no tiene datos</h1>
</tr>
@endforelse
</tbody>
</table>
   
  </div>
</div>

<script>

function  exportPrintersToCSV(_this){
  let _url = $(_this).data('href');
  window.location.href = _url;
}
</script>


</div>
@endsection