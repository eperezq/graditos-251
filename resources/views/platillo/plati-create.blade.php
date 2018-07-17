<form action="{{route('platillocreate')}}" method="post" name="formdist">
    {{csrf_field()}} 
    {{-- @include('proveedor/errores._errorsproveedor') --}}
    @include('platillo/success._succes')
    @include('platillo._formplatillo')
    <button >crear platillo</button>
</form>