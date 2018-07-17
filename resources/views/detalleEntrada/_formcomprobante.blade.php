<label for="">Descripcion</label>
<input type="text" name="descripcion" value="{{old('descripcion',isset($id)? $id->descripcion : '')}}">



<label for="">Proveedor</label>
<select name="idProveedor" id="">
    
    @foreach($proveedores as $prove)
        <option value="{{$prove->idProveedor}}">{{$prove->razonSocial}}</option>
    @endforeach
</select>
<label for="">N° de documento</label>
<input type="text" name="nroDocumento" >
<label for="">Serie</label>
<input type="text" name="serie" >
<label for="">Tipo de Comprobante</label>
<select name="idTipoComp" id="">
        @foreach($tipocomprobantes as $compro)
            <option value="{{$compro->idTipoComp}}">{{$compro->descripcion}}</option>
        @endforeach
        
</select>
<select name="idProducto" id="">
        @foreach($productos as $pro)
            <option value="{{$pro->idProducto}}">{{$pro->descripcion}}</option>
        @endforeach
</select>

<label for="">Cantidad</label>
<input type="number" name="cantidad">

<label for="">Precio Unitario</label>
<input type="number" name="precioUnitario">

<label for="">Fecha de Vencimiento</label>
<input type="date" name="fechaVencimiento">