
@extends('componentes/nav')

@section('content')

<form action="{{route('categoriacreate')}}" method="post" name="formdist" id="needs-validation" novalidate >
    {{csrf_field()}} 
    @include('categoria/errores._errorscategoria')
    @include('categoria._formcategoria')

    <div class="row">
        <div class="col-md-6">
                <div class="col-lg-12 col-sm-12 col-12 text-center mt-4">
                    <button class="btn btn-info" type="submit">Crear</button>
                </div>
        </div>
    </div>
     
</form>


@endsection