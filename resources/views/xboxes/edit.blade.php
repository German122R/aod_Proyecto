<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="container">

<h1>ACTUALIZAR LOS DATOS DE LOS XBOX<b>{{$xbox->brand}} {{$xbox->model}}</b></h1>

<form action="{{ route('xboxes.update', $xbox->id)}}" method= "post">

@csrf
@method('PUT')
<input type="hidden" name="id">
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Marca:</label>
<input class="form-control" type="text" name="brand" value="{{$xbox -> brand}}" required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Modelo:</label>
<input class="form-control"  type="text" name="model" value="{{$xbox -> model}}" required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Color:</label>
<input class="form-control"  type="text" name="color" value="{{$xbox -> color}}" required>
</div>

</div>
<br>

<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Acesorios:</label>
<input class="form-control"  type="text" name="accessories"value="{{$xbox -> accessories}}"required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero entradas de memoria:</label>
<input class="form-control" type="number" name="memory" value="{{$xbox -> memory}}"required>
</div>
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Numero de entradas de chips:</label>
<input class="form-control" type="number" name="chip" value="{{$xbox -> chip}}" required>
</div>
</div>
<div class="row">
<div class =" col-xs-12 col-sm-4 col-md-4 col-xl-4">
<label for="">Color del protector:</label>
<input class="form-control" type="number" name="protective" value="{{$xbox -> protective}}" required>
</div>
</div>
<br>
<div>
<br>
<label for="">Descripcion:</label>
<textarea class="form-control" name="description" id="" cols="30" rows="10">{{$xbox -> description}}</textarea>
</div>
<div>
<label for="">Comentario: </label>
<input class="form-control" type="text" name="comment" value={{$xbox -> comment}}>
</div>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<input  class= "btn btn-info" type="reset" value="Restablecer">
<input class="btn btn-primary" type="submit" value="Guardar">
</div>
</form>
</div>