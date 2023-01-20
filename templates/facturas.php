<!-- Mostrar consumos de datos -->
<section class="sectionfacturas" id="sectionfacturas" name="sectionfacturas">
    <div class='row' id='facturas' name="facturas">
        <?php $facturas =  json_decode(listarFacturas($_SESSION['clienteid']), true);
        if($facturas != null) { ?>
            <table class='table table-striped table-bordered table-hover table-sm'>
                <thead class='thead-dark'>
                    <tr>
                        <th scope='col' align="center">Fecha</th>
                        <th scope='col' align="center">Factura</th>
                        <th scope='col' align="center">Total</th>
                        <th scope='col' align="center">Descargar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($facturas as $dato) { ?>
                    <tr>
                        <?php 
                            $fechaSpanish = $dato['fecha'];
                            $fecha =  date("d/m/Y",strtotime($fechaSpanish));
                        ?>
                        <td align="center"><?= $fecha; ?></td>
                        <td align="center"><?= $dato['factura']; ?></td>
                        <td align="center"><?= $dato['total']."€"; ?></td>
                        <td align="center"><a href="assets/api/descargarFactura.php?factura=<?= $dato['id'] ?>" target='_blank'><i class="fa-solid fa-cloud-arrow-down fa-2x"></i></a></td>
                    </tr> <?php
                    } ?>
                </tbody>
            </table>
            <?php 
        }else{
            echo "<p align='center'>No hay datos consumidoos</p>";
        } ?>
    </div>
</section>
<!-- Fin de mostrar datos -->
