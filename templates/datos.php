
<!-- Mostrar consumos de datos -->
<section class="sectiondatos" id="sectiondatos" name="sectiondatos">
    <div class='row' id='datos' name="datos">
        <?php $datos = json_decode(datos($lineaSeleccionada,3), true); 
        if($datos != null) { ?>
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
                    <?php
                    foreach ($datos as $dato) { ?>
                    <tr>
                        <?php 
                            $fechaSpanish = $dato['fecha'];
                            $fecha =  date("d/m/Y",strtotime($fechaSpanish));
                        ?>
                        <td align="center"><?= $fecha; ?></td>
                        <td align="center"><?= $dato['hora']; ?></td>
                        <td align="center"><?= round(($dato['duracion']/1048576),2). "Mb"; ?></td>
                        <td align="center"><?= $dato['precio_real']."€"; ?></td>
                        <?php $costeExtra += $dato['precio_real']; ?>
                    </tr> <?php
                    } ?>
                </tbody>
            </table>
            <?php 
        }else{
            echo "<p align='center'>No hay datos consumidos</p>";
        } ?>
    </div>
</section>
<!-- Fin de mostrar datos -->