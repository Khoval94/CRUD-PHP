<div class="container">
    <!--contenedor principal -->
    <div class="row justify-content-center">
    <!--contenedor para centrar -->
    <div class="col-md-6">
        <!--columna -->
        <div class="card">
            <!--inicio card -->
            <div class="card-header">
                Iniciar Sesión
            </div>
            <div class="card-body">
                <!--inicio de cuerpo -->
                <form action="<?= ruta('acceso', 'ingresar') ?>" 
                method="POST"
                >
                    <!--inicio form -->
                    <div class="form-group">
                        <label for="email"> E-mail </label>
                        <input id="email" name="email" type="text" class="form-control" placeholder="Ingresa tu E-mail ej. cristian@gmail.com"/>

                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input id="contrasena" name="contrasena" type="password" class="form-control" placeholder="Ingresa tu contraseña ej. 123456"/>

                    </div>
                    <button type="submit" class="btn btn-primary" name= "btn_login">Ingresar</button>
                    <!--fin form -->
                </form>
                <!--fin de cuerpo  -->
            </div>
            <!--fin card -->
        </div>
        <!--fin columna-->
    </div>
    <!-- fin contenedor para centrar -->
    </div>
    <!--contenedor final -->
</div>