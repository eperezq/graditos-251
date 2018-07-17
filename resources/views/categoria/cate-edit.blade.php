

@extends('componentes/nav')

@section('content')

<form action="/categoria/{{$id->idCategoria}}" method="post" id="needs-validation" novalidate>
    {{method_field('Patch')}}
    {{csrf_field()}}
    @include('categoria/errores._errorscategoria')
    @include('categoria._formcategoria')

    
    <div class="col-md-6">
        <div class="col-lg-12 col-sm-12 col-12 text-center mt-4">
            <button class="btn btn-info" type="submit">Actualizar</button>
        </div>
    </div>
</form>
@endsection