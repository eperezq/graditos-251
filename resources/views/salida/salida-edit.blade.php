<form action="/salida/{{$id->idSalida}}" method="post">
    {{method_field('Patch')}}
    {{csrf_field()}}
    {{-- @include('categoria/errores._errorscategoria') --}}
    @include('salida._formsalida')

    

    <button >Actualizar</button>
</form>