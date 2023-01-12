 <!-- Mostrar datos de sms -->
<section class="sectionsms" id="sectionsms" name="sectionsms">
    <div class='row' id='sms' name="sms">
                <?php $smss = json_decode(datos($lineaSeleccionada,2), true);
                if($smss != null){ ?>
                    <table class='table table-striped table-bordered table-hover table-sm'>
                        <thead class='thead-dark'>
                            <tr>
                                <th scope='col' align="center">Fecha</th>
                                <th scope='col' align="center">Hora</th>
                                <th scope='col' align="center">destino</th>
                                <th scope='col' align="center">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                foreach ($smss as $sms) { ?>
                                <tr>
                                    <td align="center"><?= $sms['fecha']; ?></td>
                                    <td align="center"><?= $sms['hora']; ?></td>
                                    <td align="center"><?= $sms['destino']; ?></td>
                                    <td align="center"><?= $sms['precio_real']."€"; ?></td>
                                </tr> 
                                <?php
                                }        
                            ?>
                        </tbody>
                    </table>
                <?php 
                }else{
                    echo "<p align='center'>No hay SMS enviados</p>";
                }
                ?>
    </div>
</section>
<!-- fin mostrar datos sms -->