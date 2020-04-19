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
if (array_key_exists('update', $_POST)) {
    updateMat("material", "nombre", $_POST['nombre']);
    updateMat("material", "foto", $_POST['url']);
    redirect_to("materiales.php");
}
function updateMat($table, $field, $value)
{
    global $db;
    global $id;

    $sql = "UPDATE " . $table . " ";
    //ESCRIBIR TODOS LOS VALORES 
    $sql .= "SET " . $field . "='" . $value . "' ";
    $sql .= "WHERE codigo_barras = " . $id;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}
?>
<?php $material = mysqli_fetch_assoc($materiales) ?>
<form name="form" action="" method="post">
    <ul>
        <li>Codigo de barras: <?php echo $material['codigo_barras'] ?></li>
        <li>Foto: <?php echo "<img src=\"" . $material['foto'] . "\" alt=\"Image\" height=\"42\" width=\"42\">"; ?></li>
        <li>Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $material['nombre'] ?>"></li>
        <li>Foto URL: <input type="text" name="url" id="url" value="<?php echo $material['foto'] ?>"></li>
    </ul>

    <input type="submit" name="update" class="button" value="Actualizar" />
</form>

<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->