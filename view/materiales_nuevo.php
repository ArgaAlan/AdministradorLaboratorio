<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php $page_title = 'Materiales'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('create', $_POST)) {
    createMat("material", $_POST['codigo'], $_POST['nombre'], $_POST['url']);
    redirect_to("materiales.php");
}
function createMat($table, $codigo, $nombre, $foto)
{
    global $db;

    $sql = "INSERT INTO " . $table . " ";
    //ESCRIBIR TODOS LOS VALORES 
    $sql .= "VALUES (" . $codigo . ",\"" . $nombre . "\",\"" . $foto . "\")";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}
?>

<form name="form" action="" method="post">
    <ul>
        <li>Codigo de barras: <input type="text" name="codigo" id="codigo" value=""></li>
        <li>Nombre: <input type="text" name="nombre" id="nombre" value=""></li>
        <li>Foto URL: <input type="text" name="url" id="url" value=""></li>
    </ul>

    <input type="submit" name="create" class="button" value="Agregar" />
</form>

<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->