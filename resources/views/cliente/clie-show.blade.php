@extends('componentes/nav')

@section('content')


    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Basic Datatable</h5>
            <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalCliente">
                    <i class="fas fa-sign mr-2"></i>
                    Agregar
            </button>
            <div class="table-responsive">
                <table class="table table-bordered-01">
                    <thead class="text-center">
                        <tr class="text-center">
                            <th>ID </th>
                            <th>Cliente</th>
                            <th>Dirección</th>
                            <th>Correo Eléctronico</th>

                            <th>Teléfono</th>
                            
                            <th>Departamento</th>
                            <th>Provincia</th>
                            <th>Distrito</th>
                            <th colspan="2">Opciones</th> 
                        </tr>
                    </thead> 
                    <tbody> 
                        @foreach($clientes as $clie)
                        <tr class="black-text">
                            
                            <td>{{$clie->idCliente}}</td>
                            <td>{{$clie->razonSocial}}</td>
                            <td>{{$clie->direccion}}</td>

                            <td>
                                <i class="far fa-envelope mr-2"></i>
                                {{$clie->email}} <br>

                                <i class="far fa-envelope mr-2"></i>
                                {{$clie->email2}}
                            </td>
                            
                            <td>
                                <i class="fas fa-phone-volume mr-2"></i>
                                {{$clie->telefono1}}<br>  
                            
                                <i class="fas fa-phone-volume mr-2"></i>
                                {{$clie->telefono2}}
                            </td>
                           
                            <td>{{$clie->departamento}}</td>
                            <td>{{$clie->provincia}}</td>
                            <td>{{$clie->distrito}}</td>
                        
                            
                            <td>
                                
                                    <a href="cliente/{{$clie->idCliente}}/editar" class="white-text">
                                        <button class="btn green btn-sm b-01 sm-02">
                                            Editar
                                        </button>
                                    </a>
                                
                            </td>

                                <form action="cliente/{{$clie->idCliente}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                            <td>
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
    
    @include('cliente.clie-create')
    
@endsection