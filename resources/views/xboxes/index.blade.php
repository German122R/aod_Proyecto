<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

@forelse ($xboxes as $xbox)
<li>
<h3>{{$xbox->brand}} {{$xbox->model}}</h3>
<p>{{ $xbox->description}}</p>
<br>
</li>

@empty
<h1>La tabla no tiene datos</h1>

@endforelse