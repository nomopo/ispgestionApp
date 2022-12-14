<?php
    //header('Content-Type: application/json');
    //$usuario = '39720559L';
    //$password = md5("yB2493Qe0n");
    $datos = json_decode(usuarios($_POST['user']), true);
    if(empty($datos)){
        echo "No existe el usuario en la base de datos.";
    }else{
        $datos = $datos[0];
        $usuario = $_POST['user'];
        $clienteid = $datos['clienteid'];
        if($datos['cif'] == $usuario){
            $usuario = $datos['cif'];
            $nombre = $datos['nombre_comercial'];
            $password = $datos['passwd'];

        }else if($datos['nif'] == ($usuario)){
            $usuario = $datos['nif'];
            $nombre = $datos['nombrecompleto'];
            $password = $datos['passwd'];
        }
    $datosDB = ["usuario" => $usuario, "password" => $password, "nombre" => $nombre, "clienteid" => $clienteid];
    }
//Retornamos la contraseña del usuario que solicitamos
    function usuarios($usuario){
        $error = '';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERPWD, 'API DEV:5Enube@2018');
        curl_setopt($ch, CURLOPT_URL, 'https://citra.ispgestion.com/api/clientesfiscal/'.trim($usuario));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        $json = curl_exec($ch);
        $error = curl_errno($ch);
        if($error){
            echo ("Error: ".$error);
            die;
        }else{
            curl_close($ch);
        }
        //$result = (array) json_decode($json);

        return  $json;
    }

?>
