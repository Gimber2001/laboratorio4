<form action="/cliente/registrar" method="post">
    @csrf
    <input type="text" name="dni" placeholder="Ingrese su DNI"><br>
    <input type="password" name="clave" placeholder="Ingrese Nombre"><br>
    <input type="password" name="clave" placeholder="Ingrese Password"><br>
    <input type="submit"  value="Registrar">
</form>

