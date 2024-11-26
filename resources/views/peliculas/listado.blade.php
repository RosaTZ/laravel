<h1>{{$titulo}}</h1>
<h2>{{$listado[0]}}</h2>
<p>{{date('y')}}</p>

{{--  --}}

{{-- comprobar si existe --}}
{{ $director or 'No hay director' }}

{{-- condicionales --}}

@if($titulo){
    titulo: {{$titulo}};
}@else{
    no hay titulo
}@endif