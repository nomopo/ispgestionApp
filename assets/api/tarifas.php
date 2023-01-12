<?php
//echo cdr('644982392',3);
function tarifa($telefono){

    // ini_set('display_errors', '1');
    // ini_set('display_startup_errors', '1');
    // error_reporting(E_ALL);    
    //$telefono = "644982392";
    $host ="consumos.citratel.com";
    $user = "citra_conDatos";
    $pass = "xGBZMl4Qx8k2cKXH";
    $db = "citra_consumosDatos";
    $con = mysqli_connect($host,$user,$pass,$db);

    $consulta = "SELECT * FROM contratos WHERE telefono_contrato_asociado = '$telefono'";
    $resultado1 = mysqli_query($con,$consulta)->fetch_assoc();


    $consultaConsumos = "SELECT * FROM graficos WHERE telefono = '$telefono'";
    $resultado2 = mysqli_query($con,$consultaConsumos)->fetch_assoc();


    return [$resultado1, $resultado2];
}

$tarifas = tarifa($lineaSeleccionada);
$titulo = $tarifas[0]['titulo'];
$operador = $tarifas[0]['gigas_cliente'];
if($tarifas[1]['porciento'] == 0 or $tarifas[1]['porciento'] == ''){
    $consumido = 100;
}else{
    $consumido = $tarifas[1]['porciento'];
}