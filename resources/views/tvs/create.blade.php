<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="container">

<h1>FORMULARIO PARA CHECAR EL REGISTRO DE UNA TV</h1>

<form action="{{ route('tvs.store')}}" method= "post">

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
<div>
<label for="">Acesorios:</label>
<input class="form-control"  type="text" name="accessories" id="" placeholder="Acesorios">
</div>
<div>
<label for="">Cuantas patas tiene la tele:</label>
<input class="form-control" type="number" name="legs" id="" placeholder="Cuantas patas tiene la tele">
</div>
<div>
<label for="">Numero de teclas que tiene la Tv:</label>
<input class="form-control" type="number" name="keys" id="" placeholder="Numero de teclas que tiene la Tv">
</div>
<div>
<label for="">Pulgadas:</label>
<input class="form-control" type="number" name="inches" id="" placeholder="Pulgadas">
</div>
<div>
<label for="">Numero de controles que trae la tv:</label>
<input class="form-control" type="number" name="control" id="" placeholder="Numero de controles que trae la tv">
</div>
<div>
<label for="">Descripcion:</label>
<textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
</div>
<div>
<label for="">Comentario: </label>
<input class="form-control" type="text" name="comment" id="" placeholder="Comentario">
</div>
<input class="btn btn-primary" type="submit" value="GUARDAR LOS DATOS">

</form>
</div>