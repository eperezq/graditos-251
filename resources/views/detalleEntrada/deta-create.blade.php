
<form action="/detaentra" method="post" name="formdist">
        {{csrf_field()}} 
<label for="">Proveedor</label>
<select name="" id="">
    @foreach($proveedores as $prove)
        <option value="">{{$prove->razonSocial}}</option>
    @endforeach
</select>
<label for="">N° de documento</label>
<input type="text">
<label for="">Serie</label>
<input type="text">
<label for="">Tipo de Comprobante</label>
<select name="" id="">
        @foreach($tipocomprobantes as $compro)
            <option value="">{{$compro->descripcion}}</option>
        @endforeach
</select>
<select name="idProducto" id="">
        @foreach($productos as $pro)
            <option value="{{$pro->idProducto}}">{{$pro->descripcion}}</option>
        @endforeach
</select>

<label for="">Cantidadd</label>
<input type="number" name="hola">

<label for="">Precio Unitario</label>
<input type="number">

<label for="">Fecha de Vencimiento</label>
<input type="date">

<button >registrar</button>

</form>