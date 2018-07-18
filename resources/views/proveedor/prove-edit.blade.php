

@extends('componentes/nav')

@section('content')

<form action="/proveedor/{{$id->idProveedor}}" method="post">
    {{method_field('Patch')}}
    {{csrf_field()}}
    @include('proveedor/errores._errorsproveedor')
    @include('proveedor._formproveedor')

    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class=" text-center mt-4">
                <button class="btn btn-info" type="submit">Actualizar</button>
            </div>
        </div>
    </div>

    

</form>

@endsection