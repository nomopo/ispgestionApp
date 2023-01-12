<?php
$costeExtra = 0;
?>
<section class="cabecera row">
    <!-- log, cabecera número de línea y búsqueda y perfil -->
    <h3 align="center">Consumo actual</h3>
    <div class="logo col-3 col-sm-3">
        <img src="./assets/img/logo.png" alt="logo" id="logo">
    </div>
    <div class="col-6 col-sm-6">
            <div align="center">
                <?php 
                    $lineas = contratos($_SESSION['clienteid']);
                    if(isset($_GET['linea'])){
                        $lineaSeleccionada = $_GET['linea']; 
                        ?>
                        <select name="lineaActiva" id="lineaActiva" onchange="lineaActiva()">
                            <?php 
                            foreach ($lineas as $linea) { 
                                if($lineaSeleccionada == $linea){
                                    ?>
                                    <option value="<?= $linea; ?>" selected><?= $linea; ?></option>
                                    <?php
                                ?>
                            <?php }else{
                                ?>
                                <option value="<?= $linea; ?>"><?= $linea; ?></option>
                                <?php
                            } } ?>
                        
                        </select> 
                        <?php           
                    }else{ 
                        ?>
                        <select name="lineaActiva" id="lineaActiva" onchange="lineaActiva()">
                            <?php 
                            foreach ($lineas as $linea) { ?>
                                    <option value="<?= $linea; ?>"><?= $linea; ?></option>
                                    <?php
                            }   
                            ?>
                        </select>
                        <?php
                        $lineaSeleccionada = $lineas[0];
                    }
                ?>
            </div>
    </div>
    <div class="col-3 col-sm-3">
    <!-- menú nav con submenu -->
        <nav id="menuprincipal">
            <ul class="row">
                <li class="col-3"><a href="profile"><i class="fas fa-user"></i></a></li>
                <li class="col-3"><a href="logout"><i class="fas fa-close"></i></a></li>
            </ul>
        </nav>
    </div>
        
</section>
