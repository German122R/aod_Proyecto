<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class= "container"></div>
<br><br>

<div class="card">
<div class="card-header">

<div class="row">
<div class="col-md-8">
     <div class="card-title">
     <h class="badge bg-primary">Telefono:{{$phone->brand}} {{$phone->model}}</h></div>
</div>
<div class="col-md-4">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class="btn btn-primary" href="{{route('phones.index')}}">Regresar</a>
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
    <th>Acciones</th>
</tr>
   
</thead>

<tbody>

<tr>
<td>


<p>Imagen</p>

<td>

<p><b>Modelo:</b>{{$phone->brand}}</p>
<p><b>Color:</b>{{$phone->color}}</p>
<p><b>cuntos chips:</b>{{$phone->chip}}</p>
<p><p class="text-uppercase"><b class ="text-capitalize">Numero de memorias:</b>{{$phone->memory}}</p>

</td>
<td><p>{{ $phone->description}}</p></td>

</tr>

</tbody>
</table>
</div>
<div class= "card-footer">
<div class="col">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class="btn btn-primary" href="{{route('phones.edit', $phone->id)}}">EDITAR</a>
<a class="btn btn-danger" href="{{route('phones.destroy' , $phone->id)}}">ELIMINAR</a>
</div>
</div>
</div>
   
  </div>





</div>