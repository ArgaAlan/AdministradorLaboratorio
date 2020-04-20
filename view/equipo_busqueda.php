<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$table = "equipo";
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
    redirect_to("equipo.php");
}


?>
<?php $page_title = 'Equipo'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>

<?php

if (strcmp($busqueda, "nombre") == 0) {
    $materiales = find_by_column("equipo", $busqueda, $nombre);
}

if (strcmp($busqueda, "codigo_barras") == 0) {
    $materiales = find_by_column("equipo", $busqueda, $codigo_barras);
}

?>
<!--INITIALIZE FOR THIS PAGE-->

<div class="container">

    <br>
    <center>
        <h1>Lista de equipo</h1>
    </center>
    <br>

    <!-- TABLA -->

    <div class="row">
        <table class="table">

            <tr class="table-primary">
                <th>Equipo</th>
                <th>Codigo de barras</th>
                <th>Nombre</th>
                <th>Info</th>
            </tr>

            <?php
            $imprimio = 0;
            $row = 0;
            while ($material = mysqli_fetch_assoc($materiales)) {
                $imprimio = 1;
                if ($row == 0) {
                    echo "<tr>";
                    echo "<td class=\"table-light\"><img src=\"" . $material['foto'] . "\" alt=\"Image\" height=\"42\" width=\"42\"></td>";
                    echo "<td class=\"table-light\">" . $material['codigo_barras'] . "</td>";
                    echo "<td class=\"table-light\">" . $material['nombre'] . "</td>";
                    echo "<td class=\"table-light\"><a href=equipo_info.php?id=" . $material['codigo_barras'] . ">Más información</a></td>";
                    echo "</tr>";
                    $row = 1;
                } else {
                    echo "<tr>";
                    echo "<td class=\"table-secondary\"><img src=\"" . $material['foto'] . "\" alt=\"Image\" height=\"42\" width=\"42\"></td>";
                    echo "<td class=\"table-secondary\">" . $material['codigo_barras'] . "</td>";
                    echo "<td class=\"table-secondary\">" . $material['nombre'] . "</td>";
                    echo "<td class=\"table-secondary\"><a href=equipo_info.php?id=" . $material['codigo_barras'] . ">Más información</a></td>";
                    echo "</tr>";
                    $row = 0;
                }
            }
            if ($imprimio == 0) {

                echo "<tr>";
                echo "<td class=\"table-light\">INFORMACIÓN NO ENCONTRADA</td>";
                echo "<td class=\"table-light\">&nbsp;</td>";
                echo "<td class=\"table-light\">&nbsp;</td>";
                echo "<td class=\"table-light\">&nbsp;</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <!-- TABLA -->

</div>


<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->