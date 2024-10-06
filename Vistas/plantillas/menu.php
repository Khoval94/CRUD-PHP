<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">App libreria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item dropdown">
            
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Libros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= ruta("libros", "listado") ?>">Listado de libros</a></li>
            <li><a class="dropdown-item" href="<?= ruta("libros", "crear") ?>">Crear libro</a></li>
         <li class="nav-item dropdown">
            
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuarios
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= ruta("usuarios", "listado") ?>">Listado de usuarios</a></li>
              <li><a class="dropdown-item" href="<?= ruta("usuarios", "crear") ?>">Crear usuario</a></li>   
             <li class="nav-item">
          <a class="nav-link"  href="<?= ruta("inicio", "acercaDe") ?>">Acerca de </a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?= ruta("acceso", "salir") ?>"> Salir </a>
        </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>