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

<br>

<div class="container">

    <!--Formulario-->

    <div class="row">
        <form name="form" method="post">
            <div class="form-group row">
                <label class="col col-form-label">Codigo de barras:</label>
                <div class="col">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $material['codigo_barras'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Imagen:</label>
                <div class="col">
                    <?php echo "<img src=\"" . $material['foto'] . "\" alt=\"Image\" height=\"42\" width=\"42\">"; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Nombre:</label>
                <div class="col">
                    <input class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $material['nombre'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Foto URL:</label>
                <div class="col">
                    <input class="form-control" name="url" placeholder="URL" value="<?php echo $material['foto'] ?>">
                </div>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Actualizar</button>
        </form>
    </div>

    <!--Formulario-->

</div>

<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->