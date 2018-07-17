<table border="2">
        <th>ID </th>
        <th>Categoria</th>
       
        <tr>
            @foreach($salidas as $sali)
            <td>{{$sali->Area}}</td>
            
            <td>{{$sali->fechaRegistro}}</td>
            
            <td><button ><a href="salida/{{$sali->idSalida}}/editar">Editar</a></button></td>
            <form action="salida/{{$sali->idSalida}}" method="post">
                {{method_field('delete')}}
                {{csrf_field()}}
                <td><button type="submit" >eliminar</button></td>
            </form>
        </tr>
             @endforeach
    
    </table>
    
    
    