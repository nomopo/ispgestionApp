<?php
session_start();
if((!isset($_SESSION['user'])) ||(!isset($_SESSION['pass'])) || (!isset($_SESSION['pass']))){
    header('Location: logout.php');
}
include_once("./assets/api/contratosCliente.php");
include_once("./assets/api/cdr.php");
include_once("./assets/api/datos.php");
// echo "La variable user en sesion es: ".$_SESSION['user'];
// echo "<br>";
// echo "La variable pass en sesion es: ".$_SESSION['pass'];
// echo "<br>";
// echo "La variable nombreempresa en sesion es: ".$_SESSION['nombre'];
// echo "<br><br><br><br><br>";
//echo $_SESSION['clienteid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/principal.css">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/all.min.js"></script>
    <script src="./assets/js/fontawesome.min.js"></script>
    <title>Principal</title>
</head>
<body>
    <?php include_once("./templates/cabecera.php"); ?>
    <?php include_once("./templates/botonescabecera.php"); ?>
    
    <section class="datos llamada">
        <?php include_once("./templates/datos.php"); ?>
        <?php include_once("./templates/llamadas.php"); ?>
        <?php include_once("./templates/sms.php"); ?>
        
    </section>
    
    
    <script>
        window.onload = function(){
            var llamadas = document.getElementById("llamadas");
            var datos = document.getElementById("datos");
            var datos = document.getElementById("sms");
            llamadas.style.display = "none";
            datos.style.display = "none";
            sms.style.display = "none";
        }
      
    </script>
</body>
</html>