<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$table = "Reportes";
$material = $_POST['material'] ?? '';
$month = $_POST['month'] ?? '';
$year = $_POST['year'] ?? '';

if (strcmp($material, '') != 0) {
    $reportes = find_by_column("reporte", "material", $material);
} else if (strcmp($month, '') != 0) {
    $reportes = find_by_column("reporte", "month", $month);
} else if (strcmp($year, '') != 0) {
    $reportes = find_by_column("reporte", "year", $year);
} else {
    redirect_to("reportes.php");
}
?>

<?php $page_title = 'Reportes'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>

<!--INITIALIZE FOR THIS PAGE-->

<div class="container">

    <br>
    <center>
        <h1>Lista de consumibles</h1>
    </center>
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