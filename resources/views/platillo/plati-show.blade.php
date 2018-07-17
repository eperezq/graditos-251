<table border="2">
        <th>Descripcion </th>
        <th>Caracteristicas</th>
        <th>Presentacion</th>
        
       
        <tr>
            @foreach($platillos as $pla)
            <td>{{$pla->descripcion}}</td>
            <td>{{$pla->caracteristicas}}</td>
            <td>{{$pla->Presentación}}</td>
           
            
            <td><button ><a href="platillo/{{$pla->idPlatillo}}/editar">Editar</a></button></td>
            <form action="platillo/{{$pla->idPlatillo}}" method="post">
                {{method_field('delete')}}
                {{csrf_field()}}
                <td><button type="submit" >eliminar</button></td>
            </form>
        </tr>
             @endforeach
    
    </table>
    
    
    