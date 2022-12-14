<!-- Mostrar registro llamadas -->
<section class="sectionllamadas" id="sectionllamadas">
<div class='row' id='llamadas' name="llamadas">
    <table class='table table-striped table-bordered table-hover table-sm'>
        <thead class='thead-dark'>
            <tr>
                <th scope='col' align="center">Fecha</th>
                <th scope='col' align="center">Hora</th>
                <th scope='col' align="center">Duración</th>
                <th scope='col' align="center">Destino</th>
                <th scope='col' align="center">Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php $llamadas = json_decode(datos(644982392,1), true); 
            foreach ($llamadas as $llamada) { ?>
            <tr>
                <td align="center"><?= $llamada['fecha']; ?></td>
                <td align="center"><?= $llamada['hora']; ?></td>
                <td align="center"><?= $llamada['duracion']; ?></td>
                <td align="center"><?= $llamada['destino']; ?></td>
                <td align="center"><?= $llamada['precio_real']."€"; ?></td>
            </tr> <?php
            } ?>
        </tbody>
    </table>
</div>
</section>
<!-- Fin mostrar detalles llamadas -->