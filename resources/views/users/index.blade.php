@extends('layouts.dashboard')

@section('content')



<div class= "container">
<br><br>

<div class="card">
<div class="card-header">
<div class="row">
<div class="col-md-8">
     <h2 class="card-title">Listado de celulares registrado en la base de datos</h2>
</div>
<div class="col-md-4">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<span onclick="exportPhonesToCSV(event.target)"  data-href= "/exportPhonesToCSV" id="export" class ="btn btn-info">Exportar a CSV</span>
<a class="btn btn-primary" href="{{route('users.create')}}"> +Nuevo</a>

</div>
</div>
</div>
</div>


  <div class="card-body">



<table id="example" class="table  table-striped">

<thead>
<tr>
<th>ID</th>
    <th>Nombre</th>
    <th>Email</th>
   
</tr>
   
</thead>

<tbody>
@forelse ($users as $user)
<tr>
<td><p>{{ $user->id}}</p></td>
<td>
<a class="btn btn-info btn- small" href="{{ route('users.show', $user->id) }}">
<h4>{{$user->name}} </h4></td>
</a>
<td>

<p><b>Email:</b>{{$user->email}}</p>


</td>


@empty
<h1>La tabla no tiene datos</h1>
</tr>
@endforelse
</tbody>
</table>
   
  </div>
</div>

</div>

<!-- DataTables -->
<script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>

<!-- Aplicacion de DataTable -->

<script> 
$(function() {
    $('#example').DataTable();
} );
</script>

<script>

function  exportPhonesToCSV(_this){
  let _url = $(_this).data('href');
  window.location.href = _url;
}
</script>
@endsection