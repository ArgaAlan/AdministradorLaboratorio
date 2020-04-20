<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$id = $_GET['id'] ?? '';

if (strcmp($id, "") == 0) {
    redirect_to("consumibles.php");
}

$materiales = find_by_column("consumibles", "codigo_barras", $id);

?>
<?php $page_title = 'Consumibles'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('update', $_POST)) {
    updateMat("consumibles", "nombre", $_POST['nombre']);
    updateMat("consumibles", "foto", $_POST['url']);
    updateMat("consumibles", "marca", $_POST['marca']);
    updateMat("consumibles", "especificaciones", $_POST['especificaciones']);
    updateMat("consumibles", "almacen", $_POST['almacen']);
    updateMat("consumibles", "ubicacion", $_POST['ubicacion']);
    updateMat("consumibles", "manual", $_POST['manual']);
    updateMat("consumibles", "hoja_seguridad", $_POST['hoja_seguridad']);
    updateMat("consumibles", "mantenimiento", $_POST['mantenimiento']);
    updateMat("consumibles", "proveedor", $_POST['proveedor']);
    updateMat("consumibles", "cantidad", $_POST['cantidad']);
    updateMat("consumibles", "observaciones", $_POST['observaciones']);
    redirect_to("consumibles.php");
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
            <div class="form-group row">
                <label class="col col-form-label">Marca:</label>
                <div class="col">
                    <input class="form-control" name="marca" placeholder="Marca" value="<?php echo $material['marca'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Especificaciones</label>
                <div class="col">
                    <input class="form-control" name="especificaciones" placeholder="Especificaciones" value="<?php echo $material['especificaciones'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Almacen</label>
                <div class="col">
                    <input class="form-control" name="almacen" placeholder="Almacen" value="<?php echo $material['almacen'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Ubicación</label>
                <div class="col">
                    <input class="form-control" name="ubicacion" placeholder="Ubicación" value="<?php echo $material['ubicacion'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Manual</label>
                <div class="col">
                    <input class="form-control" name="manual" placeholder="Manual" value="<?php echo $material['manual'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Hoja de seguridad</label>
                <div class="col">
                    <input class="form-control" name="hoja_seguridad" placeholder="Hoja de seguridad" value="<?php echo $material['hoja_seguridad'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Mantenimiento</label>
                <div class="col">
                    <input class="form-control" name="mantenimiento" placeholder="Mantenimiento" value="<?php echo $material['mantenimiento'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Proveedor</label>
                <div class="col">
                    <input class="form-control" name="proveedor" placeholder="Proveedor" value="<?php echo $material['proveedor'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Cantidad</label>
                <div class="col">
                    <input class="form-control" name="cantidad" placeholder="Cantidad" value="<?php echo $material['cantidad'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Observaciones</label>
                <div class="col">
                    <input class="form-control" name="observaciones" placeholder="Observaciones" value="<?php echo $material['observaciones'] ?>">
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