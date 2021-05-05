
@extends('layouts.dashboard')

@section('content')



<div class= "container"></div>
<br><br>

<div class="card">
<div class="card-header">
<div class="row">
<div class="col-md-1">
<a class="btn btn-outline-info" href="{{route('tvs.create')}}"><i class= "fas fa-plus-circle"></i></a>
</div>
<div class="col-md-7">
     <h2 class="card-title">Listado de celulares registrado en la base de datos</b></h2>
</div>
<div class="col-md-4">
<div class="d-grid gap-3 d-md-flex justify-content-md-end">
<a class='btn btn-outline-info mr-2' href="{{url ('/tvs/import')}}"><i class="fas fa-file-import"></i></a>
<a class="btn btn-outline-info mr-2" href="{{url('/tvs/chart')}}"><i class= "fas fa-border-all"></i></a>
<a class="btn btn-outline-info mr-2" href="{{url('/tvs/chart')}}"><i class= "fas fa-chart-bar"></i></a>
<a class="btn btn-outline-info mr-2" href="{{url('/tvs/exportToXlsx')}}"><i class="fas fa-file-excel"></i></a>
<span onclick="exportTvsToCSV(event.target)"  data-href= "/exportTvsToCSV" id="export" class ="btn btn-outline-info"><i class="fas fa-file-csv"></i></span>
</div>
</div>
</div>
</div>


  <div class="card-body">

<table id="example"  class="table  table-striped">

<thead>
<tr>
<th>Televisiones</th>
    <th>Informacion</th>
    <th>Description</th>
    <th>Acciones</th>
</tr>
   
</thead>

<tbody>
@forelse ($teles as $tv)
<tr>
<td>
<a class="btn btn-info btn- small" href="{{ route('tvs.show', $tv->id) }}">
<h4>{{$tv->brand}} {{$tv->model}}</h4></td>
</a>
<td>

<p><b>Modelo:</b>{{$tv->brand}}</p>
<p><b>Modelo:</b>{{$tv->model}}</p>
<p><b>Color:</b>{{$tv->color}}</p>
<p><b>Conecion:</b>{{$tv->connectivity}}</p>
<p><b>Numero de patas que tiene la impresora:</b>{{$tv->keys}}</p>

</td>
<td><p>{{ $tv->description}}</p></td>
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

function  exportTvsToCSV(_this){
  let _url = $(_this).data('href');
  window.location.href = _url;
}
</script>


</div>
@endsection