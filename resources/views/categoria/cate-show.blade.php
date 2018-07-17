
@extends('componentes/nav')

@section('content')
@include('categoria/success._succes')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Basic Datatable</h5>

            <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalCategoria">
                <i class="fas fa-sign mr-2"></i>
                Agregar
            </button>

        <div class="table-responsive">
            <table class="table table-bordered-01">
                <thead class="text-center">
                    <tr>
                        <th class="text-center">ID </th>
                        <th>Categoria</th>
                        <th colspan="2">Opciones</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($categorias as $cat)
                        <td>{{$cat->idCategoria}}</td>
                        <td>{{$cat->descripcion}}</td>
                        
                        <td class="text-center">
                            <a href="categoria/{{$cat->idCategoria}}/editar" class="white-text">
                                <button class="btn green btn-sm b-01 sm-02">
                                    Editar
                                </button>
                            </a>
                        </td>
                        
                            <form action="categoria/{{$cat->idCategoria}}" method="post">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                        <td class="text-center">
                            <button type="submit" class="btn red btn-sm b-01 sm-02">eliminar</button>
                        </td>
                            </form>
                    </tr>
                    @endforeach 
                </tbody>

            </table>
        </div>
    </div>
</div>
@include('categoria.cate-create')

@endsection

    