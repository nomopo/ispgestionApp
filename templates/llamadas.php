<!-- Mostrar registro llamadas -->
<section class="sectionllamadas" id="sectionllamadas" name="sectionllamadas">
    <div class='row' id='llamadas' name="llamadas">
        <?php $llamadas = json_decode(datos($lineaSeleccionada,1), true); 
        if($llamadas != null){ ?>
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
                    <?php 
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
        <?php
        }else{
            echo "<p align='center'>No hay llamadas realizadas</p>";
        }
        ?>
    </div>
</section>
<!-- Fin mostrar detalles llamadas -->