@extends('componentes/nav')

@section('content')

<form action="/cliente/{{$id->idCliente}}" method="post" id="needs-validation" novalidate>
    {{method_field('Patch')}}
    {{csrf_field()}}
    @include('cliente/errores._errorscliente')
    @include('cliente._formcliente')

    

    <div class="col-md-12">
        <div class="col-lg-12 col-sm-12 col-12 text-center mt-4">
            <button class="btn btn-info" type="submit">Actualizar</button>
        </div>
    </div>
</form>

@endsection