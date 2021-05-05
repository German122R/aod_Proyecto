@extends('layouts.dashboard')
@section('title', 'Cards-Phones')

@section('content')


vista basada en Cards

<div class="row">
@forelse($phones as $phone)
<div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mb-4 mr-2 ml-2">
<div class="card-header">
<h2 class="text-primary"> {{  $phone->brand }} {{  $phone->model }} </h2>
</div>
<div class="card-body">
<p class="card-text text-truncate">{{  $phone->description }}</p>

<div class="">
<p class="text-muted">Color: {{$phone->color}}</p>
</div>
<div class="">
<p class="text-muted">chip: {{$phone->chip}}</p>
</div>
</div>
<div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
<a class="btn btn-outline-info padding-left mr-2" href="#"><i class= "fas fa-book-reader">VER MAS</i></a>
</div>
</div>
@empty

<h3>NO HAY REGISTROS EN LA BASE DE DATOS</h3>
@endforelse

</div>
@endsection
