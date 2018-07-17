<table border="2">
    <th>Area</th>
    <th>Producto</th>
    <th>cantidad</th>
    <th>Fecha de Salida</th>
    
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

</table>


