
@extends('componentes/nav')

@section('content')

<div class="card">
        <div class="card-body">
            <h5 class="card-title">Basic Datatable</h5>
    
                <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalPlatos">
                    <i class="fas fa-sign mr-2"></i>
                    Agregar
                </button>
    
            <div class="table-responsive"> 
                <table class="table table-bordered-01">
                    <thead>
                        <tr>
                            <th>Descripcion </th>
                            <th>Caracteristicas</th>
                            <th>Presentacion</th>
                            <th colspan="2">Opciones</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($platillos as $pla)
                            <td>{{$pla->descripcion}}</td>
                            <td>{{$pla->caracteristicas}}</td>
                            <td>{{$pla->Presentación}}</td>
                            
                            
                            <td class="text-center">
                                <a href="platillo/{{$pla->idPlatillo}}/editar" class="white-text">
                                    <button class="btn green btn-sm b-01 sm-02">
                                        Editar
                                    </button>
                                </a>
                            </td>
                                <form action="platillo/{{$pla->idPlatillo}}" method="post">
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
    
    
@include('platillo.plati-create')

@endsection
    
    