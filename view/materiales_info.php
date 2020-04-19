<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$id = $_GET['id'] ?? '';

if (strcmp($id, "") == 0) {
    redirect_to("materiales.php");
}

$materiales = find_by_column("material", "codigo_barras", $id);

?>
<?php $page_title = 'Materiales'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('update', $_POST)) {
    redirect_to("materiales_act.php?id=" . $id);
}
?>

<?php
if (array_key_exists('delete', $_POST)) {
    delete("material", $id);
    redirect_to("materiales.php");
}
function delete($table, $value)
{
    global $db;

    $sql = "DELETE FROM " . $table . " ";
    $sql .= "WHERE codigo_barras='" . $value . "'";
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
            while ($material = mysqli_fetch_assoc($materiales)) {
                $imprimio = 1;
                echo "<tr class=\"table-light\">";
                echo "<th>" . "Codigo de barras" . "</th>";
                echo "<td>" . $material['codigo_barras'] . "</td>";
                echo "</tr>";
                echo "<tr class=\"table-secondary\">";
                echo "<th>" . "Nombre" . "</th>";
                echo "<td>" . $material['nombre'] . "</td>";
                echo "</tr>";
                echo "<tr class=\"table-light\">";
                echo "<th>" . "Foto URL" . "</th>";
                echo "<td>" . $material['foto'] . "</td>";
                echo "</tr>";
                echo "<tr class=\"table-secondary\">";
                echo "<th>" . "Foto" . "</th>";
                echo "<td><img src=\"" . $material['foto'] . "\" alt=\"Image\" height=\"42\" width=\"42\"></td>";
                echo "</tr>";
            }
            if ($imprimio == 0) {

                echo "<tr class=\"table-light\">";
                echo "<th>" . "Codigo de barras" . "</th>";
                echo "<td>INFORMACIÓN NO ENCONTRADA</td>";
                echo "</tr>";
                echo "<tr class=\"table-secondary\">";
                echo "<th>" . "Nombre" . "</th>";
                echo "<td>INFORMACIÓN NO ENCONTRADA</td>";
                echo "</tr>";
                echo "<tr class=\"table-light\">";
                echo "<th>" . "Foto" . "</th>";
                echo "<td>INFORMACIÓN NO ENCONTRADA</td>";
                echo "</tr>";
                echo "<tr class=\"table-secondary\">";
                echo "<th>" . "Foto URL" . "</th>";
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
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="delete">Eliminar Material</button>
        </form>
    </div>
    <!--Botones-->
</div>

<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->