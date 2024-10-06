<h1> Crear nuevo usuario </h1>
<hr  />
<form method="POST" action="./?controlador=usuarios&accion=crear">

<div class="mb-3">
    <label for="nombre" class="form-label">Nombre Usuario</label>
    <input class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input class="form-control" id="email" name="email">
</div>
<div class="mb-3">
    <label for="contrasena" class="form-label">Contraseña</label>
    <input class="form-control" id="contrasena" name="contrasena">
</div>
<div class="mb-3" >
    <a class="btn btn-light" href="./?controlador=usuarios&accion=listado">Cancelar</a>
    <<button class="btn btn-success" type="submit" name="btn_registrar">Guardar</button>

</div>
</form>