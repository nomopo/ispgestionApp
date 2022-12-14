<?php

//header('Content-Type: application/json');

function clientes()
{
  global $i;
  $error = "";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_USERPWD, "API DEV:5Enube@2018");
  curl_setopt($ch, CURLOPT_URL, "https://citra.ispgestion.com/api/clientes/");
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_FAILONERROR, false);
  $retorno = curl_exec($ch);
  $error = curl_errno($ch);
  if ($error) {
    echo "Error; " . $error;
  } else {
    curl_close($ch);
    return $retorno;
  }
}
$i = 0;
$totalclientes = json_decode(clientes());
//$arrayclientes = [];
//foreach ($totalclientes as $clientes) {
//  $arrayclientes[] .= $i++;
//  $arrayclientes[] .= $clientes->id;
//  $arrayclientes[] .= $clientes->clienteid;
//}
echo json_encode($totalclientes, true);
