@extends('layouts.dashboard')

@section('content')



<div class="container">

<h1>actualizar  los datos de la impresora<b>{{$printer->brand}} {{$printer->model}}</b></h1>

<form action="{{ route('printers.update', $printer->id)}}" method= "post">

@csrf
@method('PUT')
<input type="hidden" name="id">
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Marca:</label>
<input class="form-control" type="text" name="brand" value="{{$printer -> brand}}" required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Modelo:</label>
<input class="form-control"  type="text" name="model" value="{{$printer -> model}}" required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Color:</label>
<input class="form-control"  type="text" name="color" value="{{$printer -> color}}" required>
</div>

</div>
<br>

<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Acesorios:</label>
<input class="form-control"  type="text" name="accessories"value="{{$printer -> accessories}}"required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero entradas de entradas para USB:</label>
<input class="form-control" type="number" name="connectivity" value="{{$printer -> connectivity}}"required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Color de las tintas:</label>
<input class="form-control" type="number" name="printcolor" value="{{$printer -> printcolor}}"required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">numero de botones de la impresora:</label>
<input class="form-control" type="number" name="resolution" value="{{$printer -> resolution}}" required>
</div>
</div>
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">numero de cables:</label>
<input class="form-control" type="number" name="speed" value="{{$printer -> speed}}" required>
</div>
</div>
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero de hojas que saca la impresora por minuto:</label>
<input class="form-control" type="number" name="pagesperminute" value="{{$printer -> pagesperminute}}" required>
</div>
</div>
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero de patas que tiene la impresora:</label>
<input class="form-control" type="number" name="keys" value="{{$printer -> keys}}" required>
</div>
</div>
<br>
<div>
<br>
<label for="">Descripcion:</label>
<textarea class="form-control" name="description" id="" cols="30" rows="10">{{$printer -> description}}</textarea>
</div>
<div>
<label for="">Comentario: </label>
<input class="form-control" type="text" name="comment" value={{$printer -> comment}}>
</div>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<input  class= "btn btn-info" type="reset" value="Restablecer">
<input class="btn btn-primary" type="submit" value="Guardar">
</div>
</form>
</div>
@endsection