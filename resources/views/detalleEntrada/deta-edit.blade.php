<form action="/comprobante/{{$id->idCategoria}}" method="post">
    {{method_field('Patch')}}
    {{csrf_field()}}
    {{-- @include('categoria/errores._errorscategoria') --}}
    @include('comprobante._formcomprobante')

    

    <button >Actualizar</button>
</form>