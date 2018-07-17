<table border="2">
        <th>ID </th>
        <th>Categoria</th>
       
        <tr>
            @foreach($comprobantes as $compro)
            <td>{{$compro->idTipoComp}}</td>
            <td>{{$compro->descripcion}}</td>
            
            <td><button ><a href="comprobante/{{$compro->idTipoComp}}/editar">Editar</a></button></td>
            <form action="comprobante/{{$compro->idTipoComp}}" method="post">
                {{method_field('delete')}}
                {{csrf_field()}}
                <td><button type="submit" >eliminar</button></td>
            </form>
        </tr>
             @endforeach
    
    </table>
    
    
    