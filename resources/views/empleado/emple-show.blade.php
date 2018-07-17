
@extends('componentes/nav')

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Basic Datatable</h5>
        <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalEmpleado">
                <i class="fas fa-sign mr-2"></i>
                Agregar
        </button>
        <div class="table-responsive">
            <table class="table table-bordered-01">
                <!-- <table id="zero_config" class="table table-striped table-bordered"> -->
                <thead class="text-center">
                    <tr >
                       
                        <th>Apellidos paternos</th>
                        <th>Apellidos maternos</th>
                        <th>Nombres</th>
                        <th>Cargo</th>
                        <th colspan="2">Opciones</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $car)
                    <tr class="black-text">
                   
                        <td>{{$car->appaterno}}</td>
                        <td>{{$car->apmaterno}}</td>
                        <td>{{$car->nombres}}</td>
                        <td class="text-center">{{$car->cargo->descripcion}}</td>
                        <td class="text-center sm-02" >
                            <button class="btn green btn-sm b-01 sm-02">
                                <a href="editarempleado/{{$car->idEmpleado}}/editar" class="white-text">Editar</a>
                            </button>
                        </td>
                            <form action="/{{$car->idEmpleado}}" method="post">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                        <td class="text-center sm-02">
                            <button type="submit" class="btn red btn-sm b-01 sm-02" >eliminar</button>
                        </td>
                            </form>
                     @endforeach    
                    </tr>
                   
                </tbody>
                <tfoot>
                    <tr class="text-center">
                    
                        <th>Apellidos paternos</th>
                        <th>Apellidos maternos</th>
                        <th>Nombres</th>
                        <th>Cargo</th>
                        <th colspan="2">Opciones</th> 
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
</div>

@include('empleado.emple-create')


@endsection






