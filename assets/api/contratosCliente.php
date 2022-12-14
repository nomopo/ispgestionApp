<?php
function contratos($codigo){
    $error = "";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERPWD, "API DEV:5Enube@2018");
    curl_setopt(
            $ch,
            CURLOPT_URL,
            "https://citra.ispgestion.com/api/contratos/p/".$codigo
    );
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

//echo contratos('000101000358');
    $contracts = json_decode($json, true);
    $cont = count($contracts);
    $a = 0;
    for ($a=0; $a < $cont; $a++) { 
        if(($contracts[$a]['servicios'][0]['titulo'] != "LINEA MOVIL") && ($contracts[$a]['servicios'][0]['fecha_baja'] === NULL && $contracts[$a]['servicios'][0]['telefono_contrato_asociado'] != NULL)){
            $lineas[] = $contracts[$a]['servicios'][0]['telefono_contrato_asociado'];

        }
    }
return $lineas;
}