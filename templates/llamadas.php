<!-- Mostrar registro llamadas -->
<div class='row' id='llamadas'>
<?php
$linea1 = json_decode(cdr(644982392,1), true);
foreach ($linea1 as $llamadas) { ?>

    <div class='col-6 center'>
    <?= $llamadas['fecha']." / ".$llamadas['hora']." / ".$llamadas['duracion']; ?>
    </div>
    <div class='col-6'>
    <?= $llamadas['destino']." | ".$llamadas['precio_real']."€"; ?>
    </div>
<?php } ?>
</div>
<!-- Fin mostrar detalles llamadas -->