<?php
//Retornamos la contraseña del usuario que solicitamos
    function usuarios(){
        $error = '';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERPWD, 'API DEV:5Enube@2018');
        curl_setopt($ch, CURLOPT_URL, 'https://citra.ispgestion.com/api/clientes');
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
    echo usuarios();