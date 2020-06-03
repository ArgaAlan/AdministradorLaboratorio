<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php require_once('../functions/pages/tags.php'); ?>
<?php require_once('../functions/pages/inputs.php'); ?>
<?php require_once('../functions/pages/tables.php'); ?>
<?php $materiales = find_all("consumibles"); ?>
<?php $page_title = 'Consumibles'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->


<div class="container">

    <?php title("consumibles") ?>

    <!-- BOTONES -->
    <div class="row">

        <!-- Buscar por nombre -->
        <?php searchBy("consumibles", "Nombre", "Buscar", "nombre", "Buscar"); ?>

        <!-- Buscar por codigo -->
        <?php searchBy("consumibles", "Codigo de barras", "Buscar", "codigo_barras", "Buscar") ?>

        <!-- Agregar material -->
        <?php addBy("consumibles", "Nuevo material", "Nuevo consumible") ?>
    </div>
    <!-- BOTONES -->

    <br>
    <!-- TABLA -->

    <div class="row">
        <table class="table">
            <?php printResults($materiales, ['foto', 'codigo_barras', 'nombre'], ['Consumibles', 'Codigo de barras', 'Nombre'], true, 'codigo_barras') ?>
        </table>
    </div>

    <!-- TABLA -->
</div>

<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->