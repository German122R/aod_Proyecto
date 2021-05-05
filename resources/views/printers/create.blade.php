@extends('layouts.dashboard')

@section('content')




<div class="container">

<h1>FORMULARIO PARA CHECAR EL REGISTRO DE UNA IMPRESORA</h1>

<form action="{{ route('printers.store')}}" method= "post">

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
<label for="">Numero entradas de USB:</label>
<input class="form-control" type="number" name="connectivity" id="" placeholder="Numero de entradas de USB" required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Color de las tintas:</label>
<input class="form-control" type="text" name="printcolor" id="" placeholder="Color de las tintas" required>
</div>
</div>

<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero de botones de la impresora:</label>
<input class="form-control" type="number" name="resolution" id="" placeholder="Numero de botones de la impresora" required>
</div>

<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">numero de cables:</label>
<input class="form-control" type="number" name="speed" id="" placeholder="Numero de cables" required>
</div>

<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">numero de hojas que saca la impresora por minuto:</label>
<input class="form-control" type="number" name="pagesperminute" id="" placeholder="Numero de hojas que saca la impresora por minuto" required>
</div>
</div>

<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero de patas que tiene la impresora:</label>
<input class="form-control" type="number" name="keys" id="" placeholder="Numero de patas que tiene la impresora" required>
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