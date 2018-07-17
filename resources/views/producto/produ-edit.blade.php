@extends('componentes/nav')

@section('content')
<form action="/producto/{{$id->idProducto}}" method="post" id="needs-validation" novalidate>
    {{method_field('Patch')}}
    {{csrf_field()}}
    @include('producto/errores._errorsproducto')
    @include('producto._formproducto')

    <div class="row">
        <div class="col-md-6">
            <label for="">Categoria</label>
            <select name="idCategoria" id="" class="custom-select select ">
                <option value="{{old('idCategoria',isset($id)? $id->idCategoria : '')}}">{{$id->categoria->descripcion}}</option>
                    @foreach($categorias as $cate)
                <option value="{{$cate->idCategoria}}">{{$cate->descripcion}}</option>
                    @endforeach
            </select>
        
        </div>
        <div class="col-md-6">
            <div class="col-lg-12 col-sm-12 col-12 text-center mt-4">
                <button class="btn btn-info" type="submit">Actualizar</button>
            </div>
        </div>
    </div>

</form>
@endsection