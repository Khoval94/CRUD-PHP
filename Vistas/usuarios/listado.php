 <h1>Listado de Usuario</h1>
 <div>
 <!--<a href="./?controlador=usuarios&accion=crear" class="btn btn-primary">Registrar Usuario</a> -->
 <?= crearLink("Registrar usuario",[
  'controlador' => 'usuarios',
  'accion' => 'crear',
  'optionsHtml' => [
    'class' => 'btn btn-primary'
  ]
]
);
 ?> 
</div>
<hr />

 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Contraseña</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($datos as $usuario) { ?>

    
    <tr>
      <th scope="row"><?= $usuario['id'] ?></th>
      <td><?= $usuario['inombre'] ?></td>
      <td><?= $usuario['email'] ?></td>
      <td><?= $usuario['contrasena'] ?></td>
      <td>
      <?= crearLink("Editar",[
  'controlador' => 'usuarios',
  'accion' => 'editar',
  'parametros' => ['id' => $usuario['id']],
  'optionsHtml' => [
    'class' => 'btn btn-outline-info btn-sm'
  ]
])
 ?> 
 <?= crearLink("Eliminar",[
  'controlador' => 'usuarios',
  'accion' => 'eliminar',
  'parametros' => ['id' => $usuario['id']],
  'optionsHtml' => [
    'class' => 'btn btn-outline-danger btn-sm'
  ]
])
 ?> 

    </td>
    </tr>
    <?php } ?>
  </tbody>
</table>


