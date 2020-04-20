<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$materiales = find_all("equipo");
?>
<?php $page_title = 'Equipo'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->


<div class="container">

    <br>
    <center>
        <h1>Lista de equipo</h1>
    </center>
    <br>

    <!-- BOTONES -->
    <div class="row">

        <!-- Buscar por nombre -->
        <div class="col">
            <form class="form-inline my-2 my-lg-0" action=<?php echo strtolower($page_title) . "_busqueda.php"; ?> method="post">
                <input class="form-control mr-sm-2" type="text" placeholder="Nombre" aria-label="Nombre" name="nombre">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar">Buscar</button>
            </form>
        </div>

        <!-- Buscar por codigo -->
        <div class="col">
            <form class="form-inline my-2 my-lg-0" action=<?php echo strtolower($page_title) . "_busqueda.php"; ?> method="post">
                <input class="form-control mr-sm-2" type="text" placeholder="Codigo de barras" aria-label="Codigo de barras" name="codigo_barras">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar">Buscar</button>
            </form>
        </div>

        <!-- Agregar material -->
        <div class="col">
            <form class="form-inline my-2 my-lg-0" action=<?php echo strtolower($page_title) . "_nuevo.php"; ?> method="post">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" value="Nuevo material">Nuevo Equipo</button>
            </form>
        </div>
    </div>
    <!-- BOTONES -->

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