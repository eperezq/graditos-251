<form action="{{route('salidacreate')}}" method="post" name="formdist">
    {{csrf_field()}} 
    {{-- @include('categoria/errores._errorscategoria') --}}
    @include('salida._formsalida')
    <button >crear categoria</button>
</form>