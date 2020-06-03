<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php require_once('../functions/pages/tags.php'); ?>
<?php require_once('../functions/pages/inputs.php'); ?>
<?php require_once('../functions/pages/tables.php'); ?>
<?php
$reportes = find_all_reportes();
?>
<?php $page_title = 'Reportes'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->


<div class="container">

    <?php title("reportes") ?>

    <!-- BOTONES -->
    <div class="row">

        <!-- Buscar por material -->
        <?php searchBy("reportes", "Material", "Buscar", "material", "Buscar") ?>

        <!-- Buscar por fecha -->
        <?php searchBy("reportes", "Mes", "Buscar", "month", "Buscar") ?>

        <!-- Agregar reporte -->
        <?php addBy("reportes", "Nuevo reporte", "Nuevo reporte") ?>
    </div>
    <!-- BOTONES -->

    <br>
    <!-- TABLA -->

    <div class="row">
        <table class="table">

            <tr class="table-primary">
                <th>Fecha</th>
                <th>Material</th>
                <th>Laboratorio</th>
                <th>Existencia</th>
                <th>Info</th>
            </tr>

            <?php
            $imprimio = 0;
            $row = 0;
            while ($reporte = mysqli_fetch_assoc($reportes)) {
                $imprimio = 1;
                if ($row == 0) {
                    echo "<tr>";
                    echo "<td class=\"table-light\">" . $reporte['day'] . "/" . $reporte['month'] . "/" . $reporte['year'] . "</td>";
                    echo "<td class=\"table-light\">" . $reporte['material'] . "</td>";
                    echo "<td class=\"table-light\">" . $reporte['laboratorio'] . "</td>";
                    echo "<td class=\"table-light\">" . $reporte['existencia'] . "</td>";
                    echo "<td class=\"table-light\"><a href=reportes_info.php?id=" . $reporte['id'] . ">Más información</a></td>";
                    echo "</tr>";
                    $row = 1;
                } else {
                    echo "<tr>";
                    echo "<td class=\"table-secondary\">" . $reporte['day'] . "/" . $reporte['month'] . "/" . $reporte['year'] . "</td>";
                    echo "<td class=\"table-secondary\">" . $reporte['material'] . "</td>";
                    echo "<td class=\"table-secondary\">" . $reporte['laboratorio'] . "</td>";
                    echo "<td class=\"table-secondary\">" . $reporte['existencia'] . "</td>";
                    echo "<td class=\"table-secondary\"><a href=reportes_info.php?id=" . $reporte['id'] . ">Más información</a></td>";
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