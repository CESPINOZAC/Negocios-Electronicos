<?php include_once 'funciones/sesiones.php'; ?>
<?php include_once 'funciones/funciones.php'; ?>
<?php include_once 'templates/header.php'; ?> 
<?php include_once 'templates/barra.php'; ?> 
<?php include_once 'templates/navegacion.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Administrador
        <small>llena el formulario para crear un administrador</small>
      </h1>
    </section>
    <div class="row">
      <div class="col-md-8">
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Administrador</h3>
            </div>
            <div class="box-body">
                <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="usuario">Usuario: </label>
                      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                      <label for="nombre">Nombre: </label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre Completo">
                    </div>
                    <div class="form-group">
                      <label for="password">Password: </label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password para Iniciar Sesion">
                    </div>
                    <div class="form-group">
                      <label for="password">Repetir Password: </label>
                      <input type="password" class="form-control" id="repetir_password" name="repetir_password" placeholder="Repetir Password">
                      <span id="resultado_password" class="help-block"></span>
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <input type="hidden" name="registro" value="nuevo">
                    <button type="submit" class="btn btn-primary" name="agregar-admin" id="crear_registro_admin">Añadir</button>
                  </div>
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
        <!-- /.content -->
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

<?php include_once 'templates/footer.php'; ?>