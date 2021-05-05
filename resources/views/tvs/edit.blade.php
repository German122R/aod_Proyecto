

@extends('layouts.dashboard')

@section('content')



<div class="container">

<h1>ACTUALIZAR LOS DATOS DE UNA TV<b>{{$tv->brand}} {{$tv->model}}</b></h1>

<form action="{{ route('tvs.update', $tv->id)}}" method= "post">

@csrf
@method('PUT')
<input type="hidden" name="id">
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Marca:</label>
<input class="form-control" type="text" name="brand" value="{{$tv -> brand}}" required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Modelo:</label>
<input class="form-control"  type="text" name="model" value="{{$tv -> model}}" required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Color:</label>
<input class="form-control"  type="text" name="color" value="{{$tv -> color}}" required>
</div>

</div>
<br>

<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Acesorios:</label>
<input class="form-control"  type="text" name="accessories"value="{{$tv -> accessories}}"required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero de botones del control:</label>
<input class="form-control" type="number" name="legs" value="{{$tv -> legs}}"required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero de de entradas de HDMI :</label>
<input class="form-control" type="number" name="keys" value="{{$tv -> keys}}" required>
</div>
</div>
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero de antenas:</label>
<input class="form-control" type="number" name="inches" value="{{$tv -> inches}}" required>
</div>
</div>
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">numero de controles que trae la tele:</label>
<input class="form-control" type="number" name="control" value="{{$tv -> control}}" required>
</div>
</div>
<br>
<div>
<br>
<label for="">Descripcion:</label>
<textarea class="form-control" name="description" id="" cols="30" rows="10">{{$tv -> description}}</textarea>
</div>
<div>
<label for="">Comentario: </label>
<input class="form-control" type="text" name="comment" value={{$tv -> comment}}>
</div>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<input  class= "btn btn-info" type="reset" value="Restablecer">
<input class="btn btn-primary" type="submit" value="Guardar">
</div>
</form>
</div>

@endsection