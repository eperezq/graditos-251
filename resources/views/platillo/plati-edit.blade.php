

@extends('componentes/nav')

@section('content')

<form action="/platillo/{{$id->idPlatillo}}" method="post">
    {{method_field('Patch')}}
    {{csrf_field()}}
    {{-- @include('platillo/errores._errorsplatillo') --}}
    <div class="row">
        <div class="col-md-6">
            @include('platillo._formplatillo')
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-6 text-center">
                <div class=" text-center mt-4">
                    <button class="btn btn-info" type="submit">Actualizar</button>
                </div>
        </div>
    </div>
  

</form>

@endsection