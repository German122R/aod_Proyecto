
@extends('layouts.dashboard')

@section('content')


<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class= "container"></div>
<br><br>

<div class="card">
<div class="card-header">

<div class="row">
<div class="col-md-8">
     <div class="card-title">
     <h class="badge bg-primary">IMPRESORA:{{$printer->brand}} {{$printer->model}}</h></div>
</div>
<div class="col-md-4">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class="btn btn-primary" href="{{route('printers.index')}}">Regresar</a>
</div>
</div>
</div>
</div>
  <div class="card-body">
<table class="table  table-striped">

<thead>
<tr>
<th>IMPRESORA</th>
    <th>Informacion</th>
    <th>Description</th>
    <th>Acciones</th>
</tr>
   
</thead>

<tbody>

<tr>
<td>


<p>Imagen</p>

<td>

<p><b>Modelo:</b>{{$printer->brand}}</p>
<p><b>Color:</b>{{$printer->color}}</p>
<p><b>cuntos chips:</b>{{$printer->chip}}</p>
<p><p class="text-uppercase"><b class ="text-capitalize">Numero de memorias:</b>{{$printer->memory}}</p>

</td>
<td><p>{{ $printer->description}}</p></td>

</tr>

</tbody>
</table>
</div>
<div class= "card-footer">
<div class="col">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class="btn btn-primary" href="{{route('printers.edit', $printer->id)}}">EDITAR</a>
<form action="{{route('printers.destroy' , $printer->id)}}" method= "post">
@csrf
@method('DELETE')
<input Class ="btn btn-danger" type="submit" value="ELIMINAR">
</form>
</div>
</div>
</div>
   
  </div>





</div>
@endsection