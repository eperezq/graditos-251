   
<form action="{{route('comprobantecreate')}}" method="post" name="formdist">
    {{csrf_field()}} 
    {{-- @include('categoria/errores._errorscategoria') --}}
    @include('comprobante._formcomprobante')
    <button >crear comprobante</button>
</form>