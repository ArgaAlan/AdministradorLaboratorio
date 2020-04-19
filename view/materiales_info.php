<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$id = $_GET['id'] ?? '';

if (strcmp($id, "") == 0) {
    redirect_to("meteriales.php");
}

$materiales = find_by_column("material", "codigo_barras", $id);

?>
<?php $page_title = 'Materiales'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

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

<form method="post">
    <input type="submit" name="delete" class="button" value="Delete" />
</form>

<div id="materiales">
    <h1>Lista de materiales</h1>
    <table class="list">
        <tr>
            <th>Campo</th>
            <th>Información</th>
        </tr>

        <?php
        $imprimio = 0;
        while ($material = mysqli_fetch_assoc($materiales)) {
            $imprimio = 1;
            echo "<tr>";
            echo "<th>" . "Codigo de barras" . "</th>";
            echo "<td><center>" . $material['codigo_barras'] . "</center></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>" . "Nombre" . "</th>";
            echo "<td><center>" . $material['nombre'] . "</center></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>" . "Foto URL" . "</th>";
            echo "<td><center>" . $material['foto'] . "</center></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>" . "Foto" . "</th>";
            echo "<td><center><img src=\"" . $material['foto'] . "\" alt=\"Image\" height=\"42\" width=\"42\"></center></td>";
            echo "</tr>";
        }
        if ($imprimio == 0) {
            echo "<tr>";
            echo "<th>" . "Codigo de barras" . "</th>";
            echo "<td>INFORMACIÓN NO ENCONTRADA</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>" . "Nombre" . "</th>";
            echo "<td>INFORMACIÓN NO ENCONTRADA</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>" . "Foto" . "</th>";
            echo "<td>INFORMACIÓN NO ENCONTRADA</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>" . "Foto URL" . "</th>";
            echo "<td>INFORMACIÓN NO ENCONTRADA</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->