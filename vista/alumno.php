<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>
<?php 
session_start();
if (isset($_SESSION["loginphp"])){
  if ($_SESSION["loginphp"]["privilegio"] == 1){
    header("location:admin.php");
  }

}else{header("location:login.php");}
?>
<?php include 'partials/menu.php'; ?>

    <div class="container">

      <div class="starter-template">
        <br>
        <br>
        <br>
        <div class="jumbotron">
          <div class="container">
            <h1><?php echo $_SESSION["loginphp"]["nombre"];?>  <?php echo $_SESSION["loginphp"]["paterno"];?>  <?php echo $_SESSION["loginphp"]["materno"];?></h1>
            <h2><strong><?php echo $_SESSION["loginphp"]["username"];?></strong></h2>
            <p><span class="label label-info"><?php echo $_SESSION["loginphp"]["privilegio"] == 1 ? 'Administrador' : 'Alumno'; ?></span></p>
            <p>
              <a href="login.php" class="btn btn-primary btn-danger">Cerrar Sesión</a>
            </p>
          </div>
        </div>
      </div>

    </div><!-- /.container -->

<?php include 'partials/footer.php'; ?>

    