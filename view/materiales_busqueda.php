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
    $materiales = find_by_column("material", $busqueda, $nombre);
}

if (strcmp($busqueda, "codigo_barras") == 0) {
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
            <th>&nbsp;</th>
        </tr>

        <?php
        $imprimio = 0;
        while ($material = mysqli_fetch_assoc($materiales)) {
            $imprimio = 1;
            echo "<tr>";
            echo "<td>" . $material['codigo_barras'] . "</td>";
            echo "<td>" . $material['nombre'] . "</td>";
            echo "<td><img src=\"" . $material['foto'] . "\" alt=\"Image\" height=\"42\" width=\"42\"></td>";
            echo "<td><a href=materiales_info.php?id=" . $material['codigo_barras'] . ">Más información</a></td>";
            echo "</tr>";
        }
        if ($imprimio == 0) {
            echo "<tr>";
            echo "<td>INFORMACIÓN NO ENCONTRADA</td>";
            echo "<td>&nbsp;</td>";
            echo "<td>&nbsp;</td>";
            echo "<td>&nbsp;</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>


<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->