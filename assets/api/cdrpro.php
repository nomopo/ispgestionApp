<?php
echo cdr('644982392',3);
function cdr($tel,$tipo){
    $error = "";
    $mes = date("m");
    $anio = date("Y");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERPWD, "API DEV:5Enube@2018");
    //curl_setopt($ch,CURLOPT_URL,"https://citra.ispgestion.com/api/cdr/p/".$linea."?mes=".$mes."&anio=".$anio."&tipo=4");
    curl_setopt($ch,CURLOPT_URL,"https://citra.ispgestion.com/api/cdr/p/".$tel."?mes=".$mes."&anio=".$anio."&tipo=".$tipo);
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
function diafindemes(){
    $mes = date("m");
    $anio = date("Y");
    $dia = date("d");
    $dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
    $fecha = $dias;
    return $fecha;
}
// $linea1 = json_decode(cdr("644982392"), true);
// foreach ($linea1 as $llamadas) {
//     # code...
//     echo $llamadas['fecha']." / ".$llamadas['hora']."                 ";
//     echo $llamadas['destino']." | ".$llamadas['precio_real']."€";
//     echo "<br>";
// }

