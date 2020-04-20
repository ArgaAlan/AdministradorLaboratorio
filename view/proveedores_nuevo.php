<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php $page_title = 'Proveedores'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('create', $_POST)) {
    createMat("proveedores", $_POST['nombre'], $_POST['telefono'], $_POST['correo'], $_POST['tipo_servicio'], $_POST['marcas'], $_POST['direccion'], $_POST['observaciones']);
    redirect_to("proveedores.php");
}
function createMat($table, $nombre, $telefono, $correo, $tipo_servicio, $marcas, $direccion, $observaciones)
{
    global $db;

    $sql = "INSERT INTO " . $table . " (nombre,telefono,correo,tipo_servicio,marcas,direccion,observaciones) ";
    //ESCRIBIR TODOS LOS VALORES 
    $sql .= "VALUES (\"" . $nombre . "\",";
    $sql .= "\""  . $telefono . "\",";
    $sql .= "\""  . $correo . "\",";
    $sql .= "\""  . $tipo_servicio . "\",";
    $sql .= "\""  . $marcas . "\",";
    $sql .= "\""  . $direccion . "\",";
    $sql .= "\""  . $observaciones . "\")";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}
?>

<br>

<div class="container">

    <!--Formulario-->

    <div class="row">
        <form name="form" method="post">
            <div class="form-group row">
                <label class="col col-form-label">Nombre:</label>
                <div class="col">
                    <input class="form-control" name="nombre" placeholder="Nombre">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Telefono:</label>
                <div class="col">
                    <input class="form-control" name="telefono" placeholder="Telefono">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Correo</label>
                <div class="col">
                    <input class="form-control" name="correo" placeholder="Correo">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Tipo de servicio</label>
                <div class="col">
                    <input class="form-control" name="tipo_servicio" placeholder="Tipo de servicio">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Marcas</label>
                <div class="col">
                    <input class="form-control" name="marcas" placeholder="Marcas">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Dirección</label>
                <div class="col">
                    <input class="form-control" name="direccion" placeholder="Dirección">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Observaciones</label>
                <div class="col">
                    <input class="form-control" name="observaciones" placeholder="Observaciones">
                </div>
            </div>
            <button type="submit" name="create" class="btn btn-primary">Crear</button>
        </form>
    </div>

    <!--Formulario-->

</div>

<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->