
<section class="cabecera">
    <!-- log, cabecera número de línea y búsqueda y perfil -->
    <div class="logo">
        <img src="./assets/img/logo.png" alt="logo" id="logo">
        <h1>Consumo actual</h1>

        <select name="lineaActiva" id="lineaActiva">';
            <?php $lineas = contratos($_SESSION['clienteid']);
            foreach ($lineas as $linea) { ?>
                <option value="<?= $linea; ?>"  onchange="numTelefono()"><?= $linea; ?></option>';
            <?php } ?>
                
        </select>
    </div>
    <p align="right">
        <a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
    </p>
</section>