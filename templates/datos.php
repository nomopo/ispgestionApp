<!-- Mostrar consumos de datos -->
<div class='row' id='datos'>
<table class='table table-striped table-bordered table-hover table-sm'>
    <thead class='thead-dark'>
        <tr>
            <th scope='col' align="center">Fecha</th>
            <th scope='col' align="center">Hora</th>
            <th scope='col' align="center">Consumo</th>
            <th scope='col' align="center">Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php $linea1 = json_decode(datos(644982392,3), true); 
        foreach ($linea1 as $llamadas) { ?>
        <tr>
            <td align="center"><?= $llamadas['fecha']; ?></td>
            <td align="center"><?= $llamadas['hora']; ?></td>
            <td align="center"><?= round(($llamadas['duracion']/1048576),2). "Mb"; ?></td>
            <td align="center"><?= $llamadas['precio_real']."€"; ?></td>
        </tr> <?php
        } ?>
    </tbody>

</div>
<!-- Fin de mostrar datos -->