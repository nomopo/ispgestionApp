<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
session_start();
if((!isset($_SESSION['user'])) ||(!isset($_SESSION['pass'])) || (!isset($_SESSION['pass']))){
    header('Location: logout.php');
}
include_once("./assets/api/contratosCliente.php");
include_once("./assets/api/cdr.php");
include_once("./assets/api/datos.php");
include_once("./assets/api/facturas.php");

//include_once('./assets/api/tarifas.php');
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
    <!-- <script src="./assets/js/jquery.min.js"></script> -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/all.min.js"></script>
    <script src="./assets/js/fontawesome.min.js"></script>
    <script src="./assets/js/principal.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/jquery.knob.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
        .container {
            margin: 0 auto;
            text-align: center;
        }
        h2 {
            font-family: "raleway";
            font-size: 28px;
            margin-bottom: 10px;
        }
        .container h2 input {
            margin: 0 auto;
            font-size: 18px;
            text-align: center;
        }
    </style>
    <title>Tu CitraTel</title>


</head>
<body>
    <?php include_once("./templates/cabecera.php"); ?>
    <?php include_once("./templates/botonescabecera.php"); ?>
    
    <?php include_once("./templates/graficaconsumos.php"); ?>
    <?php include_once("./templates/home.php"); ?>
    <?php include_once("./templates/llamadas.php"); ?>
    <?php include_once("./templates/datos.php"); ?>
    <?php include_once("./templates/sms.php"); ?>
    <?php include_once("./templates/facturas.php"); ?>

        
    <script>
        document.getElementById("sectionllamadas").style.display = "block";
        document.getElementById("sectionhome").style.display = "none";
        document.getElementById("sectionsms").style.display = "none";
        document.getElementById("sectiondatos").style.display = "none";
        document.getElementById("sectionfacturas").style.display = "none";
        $(document).ready(function () {
            //$(".dial").knob();
            $(".dial1").knob({
                min: 0,
                max: 100,
                width: 150,
                height: 150,
                displayInput: true,
                fgColor: "#10b0e6",
                release: function (v) {
                    $("p").text(v);
                },
                readOnly: true,
            });
        });
        $(document).ready(function () {
            //$(".dial").knob();
            $(".dial2").knob({
                min: 0,
                max: 100,
                width: 150,
                height: 150,
                displayInput: true,
                fgColor: "#10b0e6",
                release: function (v) {
                    $("p").text(v);
                },
                readOnly: true,
            });
        });
    </script>
</body>
</html>