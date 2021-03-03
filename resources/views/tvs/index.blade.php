@forelse ($tvs as $tv)
<li>
<h3>{{$tv->brand}} {{$tv->model}}</h3>
<p>{{ $tv->description}}</p>
<br>
</li>

@empty
<h1>La tabla no tiene datos</h1>


@endforelse