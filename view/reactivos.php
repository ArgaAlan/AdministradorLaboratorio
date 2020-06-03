<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php require_once('../functions/pages/tags.php'); ?>
<?php require_once('../functions/pages/inputs.php'); ?>
<?php require_once('../functions/pages/tables.php'); ?>
<?php
$materiales = find_all("reactivos");
?>
<?php $page_title = 'Reactivos'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->


<div class="container">

    <?php title("reactivos") ?>

    <!-- BOTONES -->
    <div class="row">

        <!-- Buscar por nombre -->
        <?php searchBy("reactivos", "Nombre", "Buscar", "nombre", "Buscar") ?>

        <!-- Buscar por codigo -->
        <?php searchBy("proveedores", "Codigo de barras", "Buscar", "codigo_barras", "Buscar") ?>

        <!-- Agregar material -->
        <?php addBy("reactivos", "Nuevo material", "Nuevo Reactivo") ?>
    </div>
    <!-- BOTONES -->

    <br>
    <!-- TABLA -->

    <div class="row">
        <table class="table">

            <tr class="table-primary">
                <th>Reactivo</th>
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
                    echo "<td class=\"table-light\"><a href=reactivos_info.php?id=" . $material['codigo_barras'] . ">Más información</a></td>";
                    echo "</tr>";
                    $row = 1;
                } else {
                    echo "<tr>";
                    echo "<td class=\"table-secondary\"><img src=\"" . $material['foto'] . "\" alt=\"Image\" height=\"42\" width=\"42\"></td>";
                    echo "<td class=\"table-secondary\">" . $material['codigo_barras'] . "</td>";
                    echo "<td class=\"table-secondary\">" . $material['nombre'] . "</td>";
                    echo "<td class=\"table-secondary\"><a href=reactivos_info.php?id=" . $material['codigo_barras'] . ">Más información</a></td>";
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