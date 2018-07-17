
<form action="/detaentra" method="post" name="formdist">
        {{csrf_field()}} 

        <select name="idCategoria" id="">
                <option value="{{old('idCategoria',isset($id)? $id->idCategoria : '')}}">{{$id->categoria->descripcion}}</option>
                    @foreach($categorias as $cate)
                <option value="{{$cate->idCategoria}}">{{$cate->descripcion}}</option>
                    @endforeach
                </select>
<button >registrar</button>

</form>