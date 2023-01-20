<?php
    include("./assets/api/tarifas.php");
?>

<div class="graficas">
    <div class="grafica1">
        <h2>Datos Consumidos</h2>
        <input type="text" value="<?= $consumido.'%'; ?>" class="dial1" />
    </div>
    <div class="grafica2">
        <h2>Costes Llamadas</h2>
        <input type="text" value="<?php $costeExtra != 0 ? $costeExtra = $costeExtra : $costeExtra = "0"; echo $costeExtra; ?>" class="dial2" />
    </div>
</div>