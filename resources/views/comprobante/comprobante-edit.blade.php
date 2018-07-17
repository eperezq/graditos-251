


@extends('componentes/nav')

@section('content')


<form action="/comprobante/{{$id->idTipoComp}}" method="post">
    {{method_field('Patch')}}
    {{csrf_field()}}
    {{-- @include('categoria/errores._errorscategoria') --}}

    

    <div class="row">
            <div class="col-md-6">
                @include('comprobante._formcomprobante')
            </div>
            <div class="col-md-6">
            </div>
        <div class="col-md-6">
            <div class="col-lg-12 col-sm-12 col-12 text-center mt-4">
                <button class="btn btn-info" type="submit">Actualizar</button>
            </div>
        </div>
        
    </div>

  
</form>
@endsection