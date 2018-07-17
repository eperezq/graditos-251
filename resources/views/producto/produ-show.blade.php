@extends('componentes/nav')

@section('content')
    <div class="card">
        <div class="card-body">
                <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalProducto">
                        <i class="fas fa-sign mr-2"></i>
                        Agregar
                </button>
            <h5 class="card-title">Basic Datatable</h5>
            <div class="table-responsive">
                <table class="table table-bordered-01">
                    <thead class="text-center">
                        <tr>
                            <th>ID </th>
                            <th>Producto</th>
                            <th>Presentacion</th>
                            <th>Unidad de Medida</th>
                            <th>Marca</th>
                            <th>Caracteristicas</th>
                            <th>Stock Minimo</th>
                            <th>Stock en Almacen</th>
                            <th>Fecha de Vencimiento</th>
                            <th>Categoria</th>
                            <th colspan="2">Opciones</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($productos as $product)
                            <td>{{$product->idProducto}}</td>
                            <td>{{$product->descripcion}}</td>
                            <td>{{$product->presentacion}}</td>
                            <td>{{$product->unidadMedida}}</td>
                            <td>{{$product->marca}}</td>
                            <td>{{$product->caracteristicas}}</td>
                            <td>{{$product->stockMinimo}}</td>
                            <td>{{$product->stockAlmacen}}</td>
                            <td>{{$product->fechaVencimiento}}</td>
                            <td>{{$product->categoria->descripcion}}</td>
                            
                            <td class="text-center sm-02">
                                <button class="btn green btn-sm b-01 sm-02">
                                    <a href="producto/{{$product->idProducto}}/editar" class="white-text">Editar</a>
                                </button>
                            </td>
                                <form action="producto/{{$product->idProducto}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                            <td class="text-center sm-02">
                                <button type="submit" class="btn red btn-sm b-01 sm-02">eliminar</button>
                            </td>
                                </form>
                        </tr>   
                        @endforeach

                </table>
            </div>
        </div>
    </div>
    
    @include('producto.produ-create')

@endsection