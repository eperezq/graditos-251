
@extends('componentes/nav')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Basic Datatable</h5>

            <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalComprobante">
                <i class="fas fa-sign mr-2"></i>
                Agregar
            </button>

        <div class="table-responsive">
            <table class="table table-bordered-01">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Comprobante</th>
                        <th colspan="2">Opciones</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($comprobantes as $compro)
                        <td>{{$compro->idTipoComp}}</td>
                        <td>{{$compro->descripcion}}</td>
                        
                        <td class="text-center">
                            <a href="comprobante/{{$compro->idTipoComp}}/editar" class="white-text">
                                <button class="btn green btn-sm b-01 sm-02">
                                    Editar
                                </button>
                            </a>
                        </td >
                            <form action="comprobante/{{$compro->idTipoComp}}" method="post">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                        <td class="text-center">

                            <button type="submit" class="btn red btn-sm b-01 sm-02" >eliminar</button>
                        </td>
                            </form>
                    </tr>
                            @endforeach
                </tbody>    

            </table>
        </div>
    </div>
</div>

@include('comprobante.comprobante-create')
@endsection
    
    