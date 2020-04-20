<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php $page_title = 'Consumibles'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('create', $_POST)) {
    createMat("consumibles", $_POST['codigo'], $_POST['nombre'], $_POST['url'], $_POST['marca'], $_POST['especificaciones'], $_POST['almacen'], $_POST['ubicacion'], $_POST['manual'], $_POST['hoja_seguridad'], $_POST['mantenimiento'], $_POST['proveedor'], $_POST['cantidad'], $_POST['observaciones']);
    redirect_to("consumibles.php");
}
function createMat($table, $codigo, $nombre, $foto, $marca, $especificaciones, $almacen, $ubicacion, $manual, $hoja_seguridad, $mantenimiento, $proveedor, $cantidad, $observaciones)
{
    global $db;

    $sql = "INSERT INTO " . $table . " ";
    //ESCRIBIR TODOS LOS VALORES 
    $sql .= "VALUES (" . $codigo . ",";
    $sql .= "\""  . $nombre . "\",";
    $sql .= "\""  . $foto . "\",";
    $sql .= "\""  . $marca . "\",";
    $sql .= "\""  . $especificaciones . "\",";
    $sql .= "\""  . $almacen . "\",";
    $sql .= "\""  . $ubicacion . "\",";
    $sql .= "\""  . $manual . "\",";
    $sql .= "\""  . $hoja_seguridad . "\",";
    $sql .= "\""  . $mantenimiento . "\",";
    $sql .= "\""  . $proveedor . "\",";
    $sql .= "\""  . $cantidad . "\",";
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
                <label class="col col-form-label">Codigo de barras:</label>
                <div class="col">
                    <input class="form-control" name="codigo" placeholder="Codigo">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Nombre:</label>
                <div class="col">
                    <input class="form-control" name="nombre" placeholder="Nombre">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Foto URL:</label>
                <div class="col">
                    <input class="form-control" name="url" placeholder="URL">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Marca:</label>
                <div class="col">
                    <input class="form-control" name="marca" placeholder="Marca">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Especificaciones</label>
                <div class="col">
                    <input class="form-control" name="especificaciones" placeholder="Especificaciones">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Almacen</label>
                <div class="col">
                    <input class="form-control" name="almacen" placeholder="Almacen">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Ubicación</label>
                <div class="col">
                    <input class="form-control" name="ubicacion" placeholder="Ubicación">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Manual</label>
                <div class="col">
                    <input class="form-control" name="manual" placeholder="Manual">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Hoja de seguridad</label>
                <div class="col">
                    <input class="form-control" name="hoja_seguridad" placeholder="Hoja de seguridad">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Mantenimiento</label>
                <div class="col">
                    <input class="form-control" name="mantenimiento" placeholder="Mantenimiento">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Proveedor</label>
                <div class="col">
                    <input class="form-control" name="proveedor" placeholder="Proveedor">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Cantidad</label>
                <div class="col">
                    <input class="form-control" name="cantidad" placeholder="Cantidad">
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