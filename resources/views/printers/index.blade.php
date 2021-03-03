@forelse ($printers as $printer)
<li>
<h3>{{$printer->brand}} {{$printer->model}}</h3>
<p>{{ $printer->description}}</p>
<br>
</li>

@empty
<h1>La tabla no tiene datos</h1>


@endforelse