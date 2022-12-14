 <!-- Mostrar datos de sms -->
<div class='row' id='sms'> <?php
$linea1 = json_decode(datos("644982392",2), true);
foreach ($linea1 as $llamadas) {
    # code...
    echo "<div class='col-6'>";
    echo $llamadas['fecha']." / ".$llamadas['hora']." / ".$llamadas['duracion'];
    echo "</div>";
    echo "<div class='col-6' align='right'>";
    echo $llamadas['destino']." | ".$llamadas['precio_real']."€";
    echo "</div>";
}
echo "</div>";
?>
<!-- fin mostrar datos sms -->