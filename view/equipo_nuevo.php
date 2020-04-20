<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php $page_title = 'Equipo'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('create', $_POST)) {
    createMat("equipo", $_POST['codigo'], $_POST['nombre'], $_POST['url'], $_POST['descripcion'], $_POST['marca'], $_POST['serie'], $_POST['inventario_tec'], $_POST['identificacion_interna'], $_POST['adquisicion'], $_POST['almacen'], $_POST['ubicacion'], $_POST['manual'], $_POST['pno'], $_POST['proveedor'], $_POST['cantidad'], $_POST['observaciones']);
    redirect_to("equipo.php");
}
function createMat($table, $codigo, $nombre, $foto, $descripcion, $marca, $serie, $inventario_tec, $identificacion_interna, $adquisicion, $almacen, $ubicacion, $manual, $pno, $proveedor, $cantidad, $observaciones)
{
    global $db;

    $sql = "INSERT INTO " . $table . " ";
    //ESCRIBIR TODOS LOS VALORES 
    $sql .= "VALUES (" . $codigo . ",";
    $sql .= "\""  . $nombre . "\",";
    $sql .= "\""  . $foto . "\",";
    $sql .= "\""  . $descripcion . "\",";
    $sql .= "\""  . $marca . "\",";
    $sql .= "\""  . $serie . "\",";
    $sql .= "\""  . $inventario_tec . "\",";
    $sql .= "\""  . $identificacion_interna . "\",";
    $sql .= "\""  . $adquisicion . "\",";
    $sql .= "\""  . $almacen . "\",";
    $sql .= "\""  . $ubicacion . "\",";
    $sql .= "\""  . $manual . "\",";
    $sql .= "\""  . $pno . "\",";
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
                <label class="col col-form-label">Descripción</label>
                <div class="col">
                    <input class="form-control" name="descripcion" placeholder="Descripción">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Marca:</label>
                <div class="col">
                    <input class="form-control" name="marca" placeholder="Marca">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Serie</label>
                <div class="col">
                    <input class="form-control" name="serie" placeholder="Serie">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Inventario TEC</label>
                <div class="col">
                    <input class="form-control" name="inventario_tec" placeholder="Inventario TEC">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Identificacion Interna</label>
                <div class="col">
                    <input class="form-control" name="identificacion_interna" placeholder="Identificacion Interna">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Adquisición</label>
                <div class="col">
                    <input class="form-control" name="adquisicion" placeholder="Adquisición">
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
                <label class="col col-form-label">PNO</label>
                <div class="col">
                    <input class="form-control" name="pno" placeholder="PNO">
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