
@extends('componentes/nav')

@section('content')

<div class="card">
        <div class="card-body">
            <h5 class="card-title">Basic Datatable</h5>

            <button type="submit" class="btn blue b-01 sm-02 float-right">
                <i class="fas fa-sign mr-2"></i>
                <a href="{{ url('crearcategoria') }}" class="white-text">Agregar</a> </button>

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
                                <button class="btn green btn-sm b-01 sm-02">
                                    <a href="categoria/{{$cat->idCategoria}}/editar" class="white-text">Editar</a>
                                </button>
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
    

    @endsection

    