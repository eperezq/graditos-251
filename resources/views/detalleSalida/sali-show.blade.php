@extends('componentes/nav')

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Basic Datatable</h5>

            <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalDSalida">
                <i class="fas fa-sign mr-2"></i>
                Agregar
            </button>

        <div class="table-responsive"> 
            <table class="table table-bordered-01">
                <thead>
                    <tr>
                        <th>Area</th>
                        <th>Producto</th>
                        <th>cantidad</th>
                        <th>Fecha de Salida</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($detallessa as $sali)
                        <td>{{$sali->salida->Area}}</td>
                        <td>{{$sali->producto->descripcion}}</td>
                        <td>{{$sali->cantidad}}</td>
                        <td>{{$sali->fechaSalida}}</td>
                        
                        {{-- <td><button ><a href="editarempleado/{{$car->idEmpleado}}/editar">Editar</a></button></td>
                        <form action="/{{$car->idEmpleado}}" method="post">
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

@include('detalleSalida.sali-create')

@endsection

