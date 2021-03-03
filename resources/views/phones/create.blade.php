<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="container">

<h1>FORMULARIO PARA CHECAR EL REGISTRO DE UN CELULAR</h1>

<form action="{{ route('phones.store')}}" method= "post">

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
<label for="">Numero entradas de memoria:</label>
<input class="form-control" type="number" name="memory" id="" placeholder="Numero de entradas de memoria">
</div>
<div>
<label for="">Numero de entradas de chips:</label>
<input class="form-control" type="number" name="chip" id="" placeholder="Numero de entradas de chips">
<div>
<label for="">Color del protector:</label>
<input class="form-control" type="number" name="protective" id="" placeholder="Color del protector">
</div>
<label for="">Descripcion:</label>
<textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
</div>
<div>
<label for="">Comentario: </label>
<input class="form-control" type="text" name="comment" id="" placeholder="Comentario">
</div>
<input class="btn btn-primary" type="submit" value="Guardar">

</form>
</div>