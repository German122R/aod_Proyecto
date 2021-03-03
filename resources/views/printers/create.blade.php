<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="container">

<h1>FORMULARIO PARA CREAR UN NUEVO REGISTRO</h1>

<form action="{{ route('printers.store')}}" method= "post">

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
<label for="">asesorios que trae la impresora:</label>
<input class="form-control"  type="text" name="accessories" id="" placeholder="asesorios que trae la impresora">
</div>
<div>
<label for="">conectividad de la impresora:</label>
<input class="form-control" type="text" name="connectivity" id="" placeholder="conectividad de la impresora">
</div>
<div>
<label for="">Color de la impresion:</label>
<input class="form-control" type="text" name="printcolor" id="" placeholder="Color de la impresion">
</div>
<div>
<label for="">Resolucion:</label>
<input class="form-control" type="number" name="resolution" id="" placeholder="Resolucion">
</div>
<div>
<label for="">Velocidad de la impresora:</label>
<input class="form-control" type="number" name="speed" id="" placeholder="Velocidad de la impresora">
<div>
<label for="">Paginas por minuto:</label>
<input class="form-control" type="number" name="pagesperminute" id="" placeholder="Paginas por minuto">
</div>
<div>
<label for="">Numero de teclas de la impresora:</label>
<input class="form-control" type="number" name="keys" id="" placeholder="Numero de teclas de la impresora">
<div>
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