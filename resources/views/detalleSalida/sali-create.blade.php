
<form action="{{route('creardetasalida')}}" method="post" name="formdist">
        {{csrf_field()}} 
<select name="idSalida" id="">
        @foreach($salidas as $sali)
                <option value="{{$sali->idSalida}}">{{$sali->Area}}</option>
        @endforeach
</select>
<select name="idProducto" id="">
        @foreach($productos as $pro)
            <option value="{{$pro->idProducto}}">{{$pro->descripcion}}</option>
        @endforeach
</select>

<label for="">Cantidad</label>
<input type="number" name="cantidad">


<label for="">Fecha de Salida</label>
<input type="date" name="fechaSalida">

<button >registrar</button>

</form>