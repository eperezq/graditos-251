<table border="2">
    
    <th>Nombre del proveedor </th>
    <th>Numero de documento </th>
    <th>Serie </th>
    <th>Documento </th>
    <th>Producto </th>
    <th>Cantidad </th>
    <th>Precio Unitario </th>
    <th>Fecha de Vencimiento</th>
   
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

</table>


