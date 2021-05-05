
@extends('layouts.dashboard')

@section('content')




<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class= "container"></div>
<br><br>

<div class="card">
<div class="card-header">
<div class="row">
<div class="col-md-1">
<a class="btn btn-outline-info" href="{{route('xboxes.create')}}"><i class= "fas fa-plus-circle"></i></a>
</div>
<div class="col-md-7">
     <h2 class="card-title">Listado de XBOX registrado en la base de datos</h2>
</div>
<div class="col-md-4">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class='btn btn-outline-info mr-2' href="{{url ('/xboxes/import')}}"><i class="fas fa-file-import"></i></a>
<a class="btn btn-outline-info mr-2" href="{{url('/xboxes/chart')}}"><i class= "fas fa-border-all"></i></a>
<a class="btn btn-outline-info mr-2" href="{{url('/xboxes/chart')}}"><i class= "fas fa-chart-bar"></i></a>
<a class="btn btn-outline-info mr-2" href="{{url('/xboxes/exportToXlsx')}}"><i class="fas fa-file-excel"></i></a>
<span onclick="exportXboxesToCSV(event.target)"  data-href= "/exportXboxesToCSV" id="export" class ="btn btn-outline-info"><i class="fas fa-file-csv"></i></span>

</div>
</div>
</div>
</div>


  <div class="card-body">

<table id="example" class="table  table-striped">

<thead>
<tr>
<th>CONSOLAS XBOX</th>
    <th>Informacion</th>
    <th>Description</th>
    <th>Acciones</th>
</tr>
   
</thead>

<tbody>
@forelse ($consolas as $xbox)
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

<!-- DataTables -->
<script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>

<!-- Aplicacion de DataTable -->

<script> 
$(function() {
    $('#example').DataTable();
} );
</script>

<script>

function  exportXboxesToCSV(_this){
  let _url = $(_this).data('href');
  window.location.href = _url;
}
</script>

</div>
@endsection