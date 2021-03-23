
@extends('layouts.dashboard')

@section('content')




<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class= "container"></div>
<br><br>

<div class="card">
<div class="card-header">
<div class="row">
<div class="col-md-8">
     <h2 class="card-title">Listado de XBOX registrado en la base de datos</h2>
</div>
<div class="col-md-4">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<span onclick="exportXboxesToCSV(event.target)"  data-href= "/exportXboxesToCSV" id="export" class ="btn btn-info">Exportar a CSV<span>
<a class="btn btn-primary" href="{{route('xboxes.create')}}"> +Nuevo</a>

</div>
</div>
</div>
</div>


  <div class="card-body">

<table class="table  table-striped">

<thead>
<tr>
<th>CONSOLAS XBOX</th>
    <th>Informacion</th>
    <th>Description</th>
    <th>Acciones</th>
</tr>
   
</thead>

<tbody>
@forelse ($xboxes as $xbox)
<tr>
<td>
<a class="btn btn-info btn- small" href="{{ route('xboxes.show', $xbox->id) }}">
<h4>{{$xbox->brand}} {{$xbox->model}}</h4></td>
</a>
<td>

<p><b>Modelo:</b>{{$xbox->brand}}</p>
<p><b>Modelo:</b>{{$xbox->model}}</p>
<p><b>Color:</b>{{$xbox->color}}</p>
<p><b>Conecion:</b>{{$xbox->connectivity}}</p>
<p><b>Numero de patas que tiene la impresora:</b>{{$xbox->keys}}</p>

</td>
<td><p>{{ $xbox->description}}</p></td>
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

function  exportXboxesToCSV(_this){
  let _url = $(_this).data('href');
  window.location.href = _url;
}
</script>

</div>
@endsection