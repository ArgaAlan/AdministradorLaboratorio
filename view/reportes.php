<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$reportes = find_all_reportes();
?>
<?php $page_title = 'Reportes'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->


<div class="container">

    <br>
    <center>
        <h1>Lista de reportes</h1>
    </center>
    <br>

    <!-- BOTONES -->
    <div class="row">

        <!-- Buscar por material -->
        <div class="col">
            <form class="form-inline my-2 my-lg-0" action=<?php echo strtolower($page_title) . "_busqueda.php"; ?> method="post">
                <input class="form-control mr-sm-2" type="text" placeholder="Material" aria-label="Material" name="material">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar">Buscar</button>
            </form>
        </div>

        <!-- Buscar por fecha -->
        <div class="col">
            <form class="form-inline my-2 my-lg-0" action=<?php echo strtolower($page_title) . "_busqueda.php"; ?> method="post">
                <input class="form-control mr-sm-2" type="text" placeholder="Mes" aria-label="Mes" name="month">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar">Buscar</button>
                <input class="form-control mr-sm-2" type="text" placeholder="Año" aria-label="Año" name="year">
            </form>
        </div>

        <!-- Agregar reporte -->
        <div class="col">
            <form class="form-inline my-2 my-lg-0" action=<?php echo strtolower($page_title) . "_nuevo.php"; ?> method="post">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" value="Nuevo reporte">Nuevo reporte</button>
            </form>
        </div>
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