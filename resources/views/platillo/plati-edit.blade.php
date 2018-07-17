<form action="/platillo/{{$id->idPlatillo}}" method="post">
    {{method_field('Patch')}}
    {{csrf_field()}}
    {{-- @include('platillo/errores._errorsplatillo') --}}
    @include('platillo._formplatillo')

    

    <button >Actualizar</button>
</form>