<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>
    <div class="container">

      <div class="starter-template">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              
              <div class="panel-body">
              <form id="loginForm" action="RegistroCode.php" method="POST" role="form">
                <br>
                <br> <legend>Registro de Usuarios</legend>
               
                <div class="form-group">
                  <label for="matricula">Matricula</label>
                  <input type="text" name="txtMatricula" class="form-control" id="matricula" autofocus required placeholder="Ingrese su matricula">
                </div>

                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="txtNombre" class="form-control" id="nombre" autofocus required placeholder="Ingrese su nombre">
                </div>

                <div class="form-group">
                  <label for="paterno">Apellido Paterno</label>
                  <input type="text" name="txtPaterno" class="form-control" id="paterno" autofocus required placeholder="Ingrese su apellido paterno">
                </div>

              <div class="form-group">
                  <label for="materno">Apellido Materno</label>
                  <input type="text" name="txtMaterno" class="form-control" id="materno" autofocus required placeholder="Ingrese su apellido materno">
                </div>

                <div class="form-group">
                  <label for="user">Nombre de Usuario</label>
                  <input type="text" name="txtUser" class="form-control" id="user" autofocus required placeholder="Ingrese un nombre de Usuario">
                </div>


                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" name="txtPassword" class="form-control" id="password" autofocus required placeholder="Ingrese su contraseña">
                </div>

                <div class="form-group">
                  <label for="email">Correo Electrónico</label>
                  <input type="email" name="txtEmail" class="form-control" id="email" required placeholder="Ingrese su dirección de correo electrónico">
                </div>

              
              
                <button type="submit" class="btn btn-success">Ingresar</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
