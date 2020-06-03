<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php require_once('../functions/pages/tags.php'); ?>
<?php require_once('../functions/pages/inputs.php'); ?>
<?php require_once('../functions/pages/tables.php'); ?>
<?php
$materiales = find_all("material");
?>
<?php $page_title = 'Materiales'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->


<div class="container">

    <?php title("materiales") ?>

    <!-- BOTONES -->
    <div class="row">

        <!-- Buscar por nombre -->
        <?php searchBy("materiales", "Nombre", "Buscar", "nombre", "Buscar"); ?>

        <!-- Buscar por codigo -->
        <?php searchBy("materiales", "Codigo de barras", "Buscar", "codigo_barras", "Buscar") ?>

        <!-- Agregar material -->
        <?php addBy("materiales", "Nuevo material", "Nuevo Material") ?>
    </div>
    <!-- BOTONES -->

    <br>
    <!-- TABLA -->

    <div class="row">
        <table class="table">
            <?php printResults($materiales, ['foto', 'codigo_barras', 'nombre'], ['Material', 'Codigo de barras', 'Nombre',], true, 'codigo_barras') ?>
        </table>
    </div>

    <!-- TABLA -->
</div>

<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->