
@extends('componentes/nav')

@section('content')

<div class="card">
        <div class="card-body">
            <h5 class="card-title">Basic Datatable</h5>
            <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalSalida">
                    <i class="fas fa-sign mr-2"></i>
                    Agregar
            </button>
            <div class="table-responsive">

                <table class="table table-bordered-01">
                    <thead>
                        <tr class="text-center">
                            <th>Categoria </th>
                            <th>Fecha</th>
                            <th colspan="2">Opciones</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            @foreach($salidas as $sali)
                            <td>{{$sali->Area}}</td>
                            
                            <td>{{$sali->fechaRegistro}}</td>
                            
                            <td class="text-center">
                               <a href="salida/{{$sali->idSalida}}/editar" class="white-text">
                                <button class="btn green btn-sm b-01 sm-02">
                                    Editar
                                </button>
                                </a>
                            </td>
                                <form action="salida/{{$sali->idSalida}}" method="post">
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
            
@include('salida.salida-create')


@endsection
    
    