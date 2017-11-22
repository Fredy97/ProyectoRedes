
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Laboratorio de Redes y Electrónica</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            <?php if(!isset($_SESSION["loginphp"])){ ?>
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="registro.php">Registro</a></li>
          
            <?php } else {?>
            <?php if($_SESSION["loginphp"]["privilegio"] == 1){ ?>
             <li class="active"><a href="admin.php">Registro de Actividad</a></li>
             <?php } else {?>
              <li class="active"><a href="admin.php">Registro de Actividad Alumno</a></li>
            <?php }}?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
