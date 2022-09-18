<form action="/suscripcion/registrar" method="post">
    @csrf
    Ingrese id Cliente
    <select name="idCliente">
        <option value="0">Seleccione Cliente</option>
        @foreach($clientes as $cliente)
                <option value="{{cliente->id}}">{{$cliente->nombre}}</option>
        @endforeach
    </select><br>
        Ingrese id Publicacion
    <select name="idPublicacion">

    </select>

    <input type="number" name="idCliente" placeholder="Ingrese id Cliente"><br>
    <input type="number" name="idPublicacion" placeholder="Ingrese  id Publicacion"><br>
    <input type="submit"  value="Registrar">
</form>

