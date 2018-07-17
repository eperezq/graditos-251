
@extends('componentes/nav')

@section('content')
    <form action="{{route('clientecreate')}}" method="post" name="formdist" id="needs-validation" novalidate>
    {{csrf_field()}} 
        @include('cliente/errores._errorscliente')
        
            
                 @include('cliente._formcliente')
            
            
                 <div class="col-lg-12 col-sm-12 col-12 text-center mt-4">
                    <button class="btn btn-info" type="submit">Crear</button>
                </div>
    </form>



@endsection