    
    
 
@extends('componentes/nav')

@section('content')
    <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Datatable</h5>
        
                    <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalEntrada">
                        <i class="fas fa-sign mr-2"></i>
                        Agregar
                    </button>
    
             <div class="table-responsive"> 
                <table class="table table-bordered-01">
                    <thead>
                        <tr>
                            <th>Nombre del proveedor </th>
                            <th>Numero de documento </th>
                            <th>Serie </th>
                            <th>Documento </th>
                            <th>Producto </th>
                            <th>Cantidad </th>
                            <th>Precio Unitario </th>
                            <th>Fecha de Vencimiento</th>
                            {{-- <th colspan="2">Opciones</th>  --}}
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($detallesen as $deta)
                            
                            <td>{{$deta->proveedor->razonSocial}}</td>
                            <td>{{$deta->nroDocumento}}</td>
                            <td>{{$deta->serie}}</td>
                            <td>{{$deta->comprobante->descripcion}}</td>
                            <td>{{$deta->producto->descripcion}}</td>
                            <td>{{$deta->cantidad}}</td>
                            <td>{{$deta->precioUnitario}}</td>
                            <td>{{$deta->fechaVencimiento}}</td>
                            
                            {{-- <td><button ><a href="detaentra/{{$deta->idProveedor}}/editar">Editar</a></button></td> --}}
                            {{-- <form action="proveedor/{{$prov->idProveedor}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                                <td><button type="submit" >eliminar</button></td>
                            </form> --}}
                        </tr>
                        @endforeach
                    </tbody> 
                      

                </table>
            </div>
        </div>
    </div>


@include('detalleEntrada.deta-create')

@endsection