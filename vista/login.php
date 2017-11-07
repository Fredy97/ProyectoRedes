
<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>
    <div class="container">

      <div class="starter-template">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
              <form id="loginForm" action="validarCode.php" method="POST" role="form">
                 <br>
                <br> <legend>Iniciar Sesión</legend>
              
                <div class="form-group">
                  <label for="matricula">Matricula</label>
                  <input type="text" name="txtMatricula" class="form-control" id="matricula" autofocus required placeholder="Matricula">
                </div>

                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" name="txtPassword" class="form-control" required id="password" placeholder="Ingresa Contraseña">
                </div>
              
                
              
                <button type="submit" class="btn btn-success">Ingresar</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container -->

<?php include 'partials/footer.php'; ?>

    