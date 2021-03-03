<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="container">

<h1>FORMULARIO PARA CREAR UN NUEVO REGISTRO DE LOS XBOX</h1>

<form action="{{ route('xboxes.store')}}" method= "post">

@csrf
<div>
<label for="">Marca:</label>
<input class="form-control" type="text" name="brand" id="" placeholder="Marca">
</div>
<div>
<label for="">Modelo:</label>
<input class="form-control"  type="text" name="model" id="" placeholder="Modelo">
</div>
<div>
<label for="">Color:</label>
<input class="form-control"  type="text" name="color" id="" placeholder="Color">
</div>
<div>
<label for="">asesorios que trae el xbox:</label>
<input class="form-control"  type="text" name="accessories" id="" placeholder="asesorios que trae el xbox">
</div>
<div>
<label for="">generacion del xbox:</label>
<input class="form-control" type="text" name="generation" id="" placeholder="generacion del xbox">
</div>
<div>
<label for="">Numero de controles que trae el xbox:</label>
<input class="form-control" type="number" name="control" id="" placeholder="Numero de controles que trae el xbox">
</div>
<div>
<label for="">Cuantos juegos trae el xbox:</label>
<input class="form-control" type="number" name="games" id="" placeholder="Cuantos juegos trae el xbox">
<div>
<label for="">lanzamiento del xbox:</label>
<input class="form-control" type="number" name="launch" id="" placeholder="Lanzamiento del xbox">
</div>
<label for="">Descripcion:</label>
<textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
</div>
<div>
<label for="">Comentario: </label>
<input class="form-control" type="text" name="comment" id="" placeholder="Comentario">
</div>
<input class="btn btn-primary" type="submit" value="Guardas los datos">

</form>
</div>