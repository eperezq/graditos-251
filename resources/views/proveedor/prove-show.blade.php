
@extends('componentes/nav')

@section('content')

<div class="card">
        <div class="card-body">
            <h5 class="card-title">TABLA PROVEEDOR</h5>

            <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalProveedor">
                    <i class="fas fa-sign mr-2"></i>
                    Agregar
            </button>

            <div class="table-responsive">
                <table class="table table-bordered-01">
                    <thead class="text-center">
                        <tr>
                            <th>ID </th>
                            <th>Proveedor</th>
                            <th>RUC</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo Eléctronico</th>
                            <th colspan="2">Opciones</th>
                            
                        </tr>
                    </thead>
                    
                    
                    <tr>
                        @foreach($proveedores as $prov)
                        <td>{{$prov->idProveedor}}</td>
                        <td>{{$prov->razonSocial}}</td>
                        <td>{{$prov->ruc}}</td>
                        <td>{{$prov->direccion}}</td>

                        <td>
                            <i class="fas fa-phone-volume mr-2"></i>
                            {{$prov->telefono1}} <br>

                            @if ($prov->telefono2==!null)
                            <i class="fas fa-phone-volume mr-2"></i>
                            {{$prov->telefono2}}
                            @endif
                            
                            
                        </td>

                        <td><i class="far fa-envelope mr-2"></i>
                            {{$prov->email1}}<br>

                            @if ($prov->email2==!null)
                            <i class="far fa-envelope mr-2"></i>
                            {{$prov->email2}}
                            @endif

                        </td>
                   
                        
                        <td class="text-center">
                            <button class="btn green btn-sm b-01 sm-02">
                                <a href="proveedor/{{$prov->idProveedor}}/editar" class="white-text">Editar</a>
                            </button>
                        </td>

                            <form action="proveedor/{{$prov->idProveedor}}" method="post">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                        <td class="text-center">
                            <button type="submit" class="btn red btn-sm b-01 sm-02">eliminar</button>
                        </td>
                            </form>
                    </tr>
                            @endforeach

                </table>
            </div>
        </div>
</div>
   
@include('proveedor.prove-create')
    
   
    
@endsection
   