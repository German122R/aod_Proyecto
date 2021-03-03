<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

@forelse ($vehiculos as $vehicle)
<li>
<h3>{{$vehicle->brand}} {{$vehicle->model}}</h3>
<p>{{ $vehicle->description}}</p>
<br>
</li>

@empty
<h1>La tabla no tiene datos</h1>

@endforelse

