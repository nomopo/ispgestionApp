<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once('assets/functions/functions.php');
//$usuario = '39720559L';
//$password = md5("yB2493Qe0n");
if (isset($_POST['user']) && isset($_POST['pass'])) {
  require_once('assets/api/usuarios.php');
  $post_user = sanitizar($_POST['user']);
  $post_pass = sanitizar($_POST['pass']);
  $post_pass = md5($post_pass);
  if(($post_user && $post_pass)&&($post_user == $datosDB['usuario'] && $post_pass == $datosDB['password'])){
    session_start();
    $_SESSION['user'] = $post_user;
    $_SESSION['pass'] = $post_pass;
    $_SESSION['nombre'] = $datosDB['nombre'];
    $_SESSION['clienteid'] = $datosDB['clienteid'];

    header("Location: principal.php");

  }else{
    header("Location: logout.php");
  }
  echo $post_user;
  echo "<br>";
  echo $post_pass;
  echo "<br>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/js/bootstrap.min.js">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/css/login.css">
</title>
</head>
<body>
<header>
  <div class="degradadoAzulHeader">
    <span class="mdi mdi-menu menu"></span>
  </div>
</header>
<form action="index.php" method="post" name="login" id="login" class="gridform">
  <span class="mdi mdi-account"></span>
  <input type="text" name="user" id="user" placeholder="Username">
  <input type="password" name="pass" id="pass" placeholder="Password">
  <input type="submit" value="Enviar" class="btn btn-info button">
  <a href="recovery.php">Olvidé la contraseña</a>
   </form>

</form>
<footer>
  <div class="degradadoAzulFooter"></div>
</footer>
</body>
</html>
