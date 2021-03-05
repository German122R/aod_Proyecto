<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

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
<a class="btn btn-primary" href="{{route('tvs.create')}}"> +Nuevo</a>

</div>
</div>
</div>
</div>


  <div class="card-body">

<table class="table  table-striped">

<thead>
<tr>
<th>Televisiones</th>
    <th>Informacion</th>
    <th>Description</th>
    <th>Acciones</th>
</tr>
   
</thead>

<tbody>
@forelse ($tvs as $tv)
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




</div>