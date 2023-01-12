<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
function listarFacturas($codigo){
    $error = "";
    $fecha = date("d-m-Y");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERPWD, "API DEV:5Enube@2018");
    //curl_setopt($ch,CURLOPT_URL,"https://citra.ispgestion.com/api/facturas/p/?cliente=".$codigo."&mostrar=50&pagina=0&orden=DESC");
    curl_setopt($ch,CURLOPT_URL,"https://citra.ispgestion.com/api/facturas/p/".$codigo);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_FAILONERROR, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    $error = curl_errno($ch);
    if ($error) {
        echo "Error: " . $error;
        die();
    } else {
        curl_close($ch);
    }
    return $json;
}
