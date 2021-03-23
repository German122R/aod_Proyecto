
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
     <h class="badge bg-primary">TELEVISIONES:{{$tv->brand}} {{$tv->model}}</h></div>
</div>
<div class="col-md-4">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class="btn btn-primary" href="{{route('tvs.index')}}">Regresar</a>
</div>
</div>
</div>
</div>
  <div class="card-body">
<table class="table  table-striped">

<thead>
<tr>
<th>TELEVISIONES</th>
    <th>Informacion</th>
    <th>Description</th>
    <th>Acciones</th>
</tr>
   
</thead>

<tbody>

<tr>
<td>


<p>ImAGENES DE LA TELEVISIONES</p>

<td>

<p><b>Modelo:</b>{{$tv->brand}}</p>
<p><b>Color:</b>{{$tv->color}}</p>
<p><b>cuntos chips:</b>{{$tv->chip}}</p>
<p><p class="text-uppercase"><b class ="text-capitalize">Numero de memorias:</b>{{$tv->memory}}</p>

</td>
<td><p>{{ $tv->description}}</p></td>

</tr>

</tbody>
</table>
</div>
<div class= "card-footer">
<div class="col">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class="btn btn-primary" href="{{route('tvs.edit', $tv->id)}}">EDITAR</a>
<form action="{{route('tvs.destroy' , $tv->id)}}" method= "post">
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