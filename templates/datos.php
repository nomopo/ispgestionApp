
<!-- Mostrar consumos de datos -->
<section class="sectiondatos" id="sectiondatos">
<div class='row' id='datos' name="datos">
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
            <?php $datos = json_decode(datos(644982392,3), true); 
            foreach ($datos as $dato) { ?>
            <tr>
                <td align="center"><?= $dato['fecha']; ?></td>
                <td align="center"><?= $dato['hora']; ?></td>
                <td align="center"><?= round(($dato['duracion']/1048576),2). "Mb"; ?></td>
                <td align="center"><?= $dato['precio_real']."€"; ?></td>
            </tr> <?php
            } ?>
        </tbody>
    </table>
</div>
</section>
<!-- Fin de mostrar datos -->