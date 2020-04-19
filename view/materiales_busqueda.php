<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$table = "material";
$codigo_barras = $_POST['codigo_barras'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$busqueda = "";

if (strcmp($nombre, '') != 0) {
    $busqueda = "nombre";
}

if (strcmp($codigo_barras, '') != 0) {
    $busqueda = "codigo_barras";
}

if (strcmp($busqueda, '') == 0) {
    redirect_to("materiales.php");
}


?>

<?php include(PAGES_PATH . '/staff_header.php'); ?>

<?php

if (strcmp($busqueda, "nombre") == 0) {
    echo "Nombre: " . $nombre . "<br/>";
    $materiales = find_by_column("material", $busqueda, $nombre);
}

if (strcmp($busqueda, "codigo_barras") == 0) {
    echo "Codigo de barras: " . $codigo_barras . "<br/>";
    $materiales = find_by_column("material", $busqueda, $codigo_barras);
}

?>
<?php $page_title = 'Materiales'; ?>
<!--INITIALIZE FOR THIS PAGE-->

<div id="materiales">
    <h1>Lista de materiales</h1>
    <table class="list">
        <tr>
            <th>Codigo de barras</th>
            <th>Nombre</th>
            <th>Foto</th>
        </tr>

        <?php while ($material = mysqli_fetch_assoc($materiales)) { ?>
            <tr>
                <td><?php echo h($material['codigo_barras']); ?></td>
                <td><?php echo h($material['nombre']); ?></td>
                <td><?php echo "<img src=\"" . h($material['foto']) . "\" alt=\"Image\" height=\"42\" width=\"42\">"; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>


<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->