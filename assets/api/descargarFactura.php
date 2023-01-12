<?php
function descargaFactura($factura){
    $error = "";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERPWD, "API DEV:5Enube@2018");
    curl_setopt($ch,CURLOPT_URL,"https://citra.ispgestion.com/api/facturas/downloads/".$factura);
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
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="download.pdf"');
readfile('download.pdf');
if(isset($_GET['factura'])){
    $factura = $_GET['factura'];
}
echo descargaFactura($factura);
