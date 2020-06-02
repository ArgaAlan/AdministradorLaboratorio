<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$id = $_GET['id'] ?? '';

if (strcmp($id, "") == 0) {
    redirect_to("reportes.php");
}

$reportes = find_by_column("reporte", "id", $id);

?>
<?php $page_title = 'Reportes'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('update', $_POST)) {
    redirect_to("reportes_act.php?id=" . $id);
}
?>

<?php
if (array_key_exists('delete', $_POST)) {
    delete("reporte", $id);
    redirect_to("reportes.php");
}
function delete($table, $value)
{
    global $db;

    $sql = "DELETE FROM " . $table . " ";
    $sql .= "WHERE id='" . $value . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}
?>
<br>
<div class="container">
    <!--Botones-->
    <div class="row">

        <form class="form-inline my-2 my-lg-0" method="post">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="update">Actualizar información</button>
        </form>

    </div>
    <!--Botones-->

    <br>
    <!-- TABLA -->

    <div class="row">
        <table class="table">

            <tr class="table-primary">
                <th>Campo</th>
                <th>Información</th>
            </tr>

            <?php
            $imprimio = 0;
            while ($reporte = mysqli_fetch_assoc($reportes)) {
                $imprimio = 1;
                echo "<tr class=\"table-light\">";
                echo "<th>" . "Dia" . "</th>";
                echo "<td>" . $reporte['day'] . "</td>";
                echo "</tr>";
                echo "<tr class=\"table-secondary\">";
                echo "<th>" . "Mes" . "</th>";
                echo "<td>" . $reporte['month'] . "</td>";
                echo "</tr>";
                echo "<tr class=\"table-light\">";
                echo "<th>" . "Año" . "</th>";
                echo "<td>" . $reporte['year'] . "</td>";
                echo "</tr>";
                echo "<tr class=\"table-secondary\">";
                echo "<th>" . "Material" . "</th>";
                echo "<td>" . $reporte['material'] . "</td>";
                echo "</tr>";
                echo "<tr class=\"table-light\">";
                echo "<th>" . "Laboratorio" . "</th>";
                echo "<td>" . $reporte['laboratorio'] . "</td>";
                echo "</tr>";
                echo "<tr class=\"table-secondary\">";
                echo "<th>" . "Existencia" . "</th>";
                echo "<td>" . $reporte['existencia'] . "</td>";
                echo "</tr>";
                echo "<tr class=\"table-light\">";
                echo "<th>" . "Modificación" . "</th>";
                echo "<td>" . $reporte['modificacion'] . "</td>";
                echo "</tr>";
                echo "<tr class=\"table-secondary\">";
                echo "<th>" . "Observaciones" . "</th>";
                echo "<td>" . $reporte['observaciones'] . "</td>";
                echo "</tr>";
            }
            if ($imprimio == 0) {

                echo "<tr class=\"table-light\">";
                echo "<th>" . "" . "</th>";
                echo "<td>INFORMACIÓN NO ENCONTRADA</td>";
                echo "</tr>";
                echo "<tr class=\"table-secondary\">";
                echo "<th>" . "" . "</th>";
                echo "<td>INFORMACIÓN NO ENCONTRADA</td>";
                echo "</tr>";
                echo "<tr class=\"table-light\">";
                echo "<th>" . "" . "</th>";
                echo "<td>INFORMACIÓN NO ENCONTRADA</td>";
                echo "</tr>";
                echo "<tr class=\"table-secondary\">";
                echo "<th>" . "" . "</th>";
                echo "<td>INFORMACIÓN NO ENCONTRADA</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <!-- TABLA -->

    <br>

    <!--Botones-->
    <div class="row">
        <form class="form-inline my-2 my-lg-0" method="post">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="delete">Eliminar Reporte</button>
        </form>
    </div>
    <!--Botones-->
</div>

<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->