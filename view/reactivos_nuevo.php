<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php $page_title = 'Reactivos'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('create', $_POST)) {
    createMat("reactivos", $_POST['codigo'], $_POST['nombre'], $_POST['url'], $_POST['marca'], $_POST['fecha'], $_POST['identificacion_interna'], $_POST['hoja'], $_POST['almacen'], $_POST['ubicacion'], $_POST['proveedor'], $_POST['cantidad'], $_POST['observaciones']);
    redirect_to("reactivos.php");
}
function createMat($table, $codigo, $nombre, $foto, $marca, $fecha, $identificacion_interna, $hoja, $almacen, $ubicacion, $proveedor, $cantidad, $observaciones)
{
    global $db;

    $sql = "INSERT INTO " . $table . " ";
    //ESCRIBIR TODOS LOS VALORES 
    $sql .= "VALUES (" . $codigo . ",\"" . $nombre . "\",\"" . $foto . "\",\"" . $marca . "\",\"" . $fecha . "\",\"" . $identificacion_interna . "\",\"" . $hoja . "\",\"" . $almacen . "\",\"" . $ubicacion . "\",\"" . $proveedor . "\",\"" . $cantidad . "\",\"" . $observaciones . "\")";
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
                    <input class="form-control" name="codigo" placeholder="Codigo de barras">
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
                <label class="col col-form-label">Fecha de adquisición:</label>
                <div class="col">
                    <input class="form-control" name="fecha" placeholder="Fecha">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Identificación Interna:</label>
                <div class="col">
                    <input class="form-control" name="identificacion_interna" placeholder="Identificación Interna">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Hoja de seguridad:</label>
                <div class="col">
                    <input class="form-control" name="hoja" placeholder="Hoja de seguridad">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Almacen:</label>
                <div class="col">
                    <input class="form-control" name="almacen" placeholder="Almacen">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Ubicación:</label>
                <div class="col">
                    <input class="form-control" name="ubicacion" placeholder="Ubicación">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Proveedor:</label>
                <div class="col">
                    <input class="form-control" name="proveedor" placeholder="Proveedor">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Cantidad:</label>
                <div class="col">
                    <input class="form-control" name="cantidad" placeholder="Cantidad">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Observaciones:</label>
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