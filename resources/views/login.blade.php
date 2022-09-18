<form action="/login" method="post">
    @csrf
    <input type="text" name="dni" placeholder="Ingrese su DNI"><br>
    <input type="password" name="clave" placeholder="Ingrese su Clave"><br>
    <input type="submit"  value="login"><br>
</form>
