@extends('layouts.dashboard')

@section('content')





<div class="container">

<h1>FORMULARIO PARA CHECAR EL REGISTRO DE UNA TV</h1>

<form action="{{ route('tvs.store')}}" method= "post">

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
<label for="">Numero de botones del control:</label>
<input class="form-control" type="number" name="legs" id="" placeholder="Numero de botones del control" required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero de entradas de HDMI:</label>
<input class="form-control" type="number" name="keys" id="" placeholder="Numero de entradas de HDMI" required>
</div>
</div>
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero de antenas:</label>
<input class="form-control" type="number" name="inches" id="" placeholder="precio" required>
</div>
</div>
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">NUmero de controles que trae la tele:</label>
<input class="form-control" type="number" name="control" id="" placeholder="control" required>
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