<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$id = $_GET['id'] ?? '';

if (strcmp($id, "") == 0) {
    redirect_to("proveedores.php");
}

$materiales = find_by_column("proveedores", "id", $id);

?>
<?php $page_title = 'Proveedores'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('update', $_POST)) {
    updateMat("proveedores", "nombre", $_POST['nombre']);
    updateMat("proveedores", "telefono", $_POST['telefono']);
    updateMat("proveedores", "correo", $_POST['correo']);
    updateMat("proveedores", "tipo_servicio", $_POST['tipo_servicio']);
    updateMat("proveedores", "marcas", $_POST['marcas']);
    updateMat("proveedores", "direccion", $_POST['direccion']);
    updateMat("proveedores", "observaciones", $_POST['observaciones']);
    redirect_to("proveedores.php");
}
function updateMat($table, $field, $value)
{
    global $db;
    global $id;

    $sql = "UPDATE " . $table . " ";
    //ESCRIBIR TODOS LOS VALORES 
    $sql .= "SET " . $field . "='" . $value . "' ";
    $sql .= "WHERE id = " . $id;
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
                <label class="col col-form-label">Nombre:</label>
                <div class="col">
                    <input class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $material['nombre'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Telefono:</label>
                <div class="col">
                    <input class="form-control" name="telefono" placeholder="Telefono" value="<?php echo $material['telefono'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Correo</label>
                <div class="col">
                    <input class="form-control" name="correo" placeholder="Correo" value="<?php echo $material['correo'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Tipo de servicio</label>
                <div class="col">
                    <input class="form-control" name="tipo_servicio" placeholder="Tipo de servicio" value="<?php echo $material['tipo_servicio'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Marcas</label>
                <div class="col">
                    <input class="form-control" name="marcas" placeholder="Marcas" value="<?php echo $material['marcas'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Dirección</label>
                <div class="col">
                    <input class="form-control" name="direccion" placeholder="Dirección" value="<?php echo $material['direccion'] ?>">
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