<?php

//header('Content-Type: application/json');
// $post_user = $_GET["user"];
// $post_pass = $_GET["pass"];
function clientes()
{
    $error = "";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERPWD, "API DEV:5Enube@2018");
    curl_setopt(
        $ch,
        CURLOPT_URL,
        "https://citra.ispgestion.com/api/clientesfiscal/39720559L"
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
    //$result = (array) json_decode($json);
    //return $result;

    return $json;
}
