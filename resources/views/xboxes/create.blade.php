
@extends('layouts.dashboard')

@section('content')




<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="container">

<h1>FORMULARIO PARA CHECAR EL REGISTO DE LOS XBOX</h1>

<form action="{{ route('xboxes.store')}}" method= "post">

@csrf
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Marca:</label>
<input class="form-control" type="text" name="brand" id="" placeholder="Marca" required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Modelo:</label>
<input class="form-control"  type="text" name="model" id="" placeholder="Modelo"required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Color:</label>
<input class="form-control"  type="text" name="color" id="" placeholder="Color" required>
</div>

</div>
<br>

<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Acesorios:</label>
<input class="form-control"  type="text" name="accessories" id="" placeholder="Acesorios" required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero de controles:</label>
<input class="form-control" type="number" name="generation" id="" placeholder="Numero de controles" required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero de botones de la consola:</label>
<input class="form-control" type="number" name="control" id="" placeholder="Numero de botones de la consola" required>
</div>
</div>
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">numero de juegos que trae la consola:</label>
<input class="form-control" type="number" name="games" id="" placeholder="Numero de juegos que trae la consola" required>
</div>
</div>
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">generacion:</label>
<input class="form-control" type="number" name="launch" id="" placeholder="precio" required>
</div>
</div>
<br>
<div>
<br>
<label for="">Descripcion:</label>
<textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
</div>
<div>
<label for="">Comentario: </label>
<input class="form-control" type="text" name="comment" id="" placeholder="Comentario" required>
</div>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<input  class= "btn btn-info" type="reset" value="Restablecer">
<input class="btn btn-primary" type="submit" value="Guardar">
</div>
</form>
</div>
@endsection