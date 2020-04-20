<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$id = $_GET['id'] ?? '';

if (strcmp($id, "") == 0) {
    redirect_to("reactivos.php");
}

$materiales = find_by_column("reactivos", "codigo_barras", $id);

?>
<?php $page_title = 'Reactivos'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('update', $_POST)) {
    updateMat("reactivos", "nombre", $_POST['nombre']);
    updateMat("reactivos", "foto", $_POST['url']);
    updateMat("reactivos", "marca", $_POST['marca']);
    updateMat("reactivos", "fecha_adquisicion", $_POST['fecha']);
    updateMat("reactivos", "identificacion_interna", $_POST['identificacion_interna']);
    updateMat("reactivos", "hoja_seguridad", $_POST['hoja']);
    updateMat("reactivos", "almacen", $_POST['almacen']);
    updateMat("reactivos", "ubicacion", $_POST['ubicacion']);
    updateMat("reactivos", "proveedor", $_POST['proveedor']);
    updateMat("reactivos", "cantidad", $_POST['cantidad']);
    updateMat("reactivos", "observaciones", $_POST['observaciones']);
    redirect_to("reactivos.php");
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
                <label class="col col-form-label">Fecha de adquisición:</label>
                <div class="col">
                    <input class="form-control" name="fecha" placeholder="Fecha" value="<?php echo $material['fecha_adquisicion'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Identificación Interna:</label>
                <div class="col">
                    <input class="form-control" name="identificacion_interna" placeholder="Identificación Interna" value="<?php echo $material['identificacion_interna'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Hoja de seguridad:</label>
                <div class="col">
                    <input class="form-control" name="hoja" placeholder="Hoja de seguridad" value="<?php echo $material['hoja_seguridad'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Almacen:</label>
                <div class="col">
                    <input class="form-control" name="almacen" placeholder="Almacen" value="<?php echo $material['almacen'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Ubicación:</label>
                <div class="col">
                    <input class="form-control" name="ubicacion" placeholder="Ubicación" value="<?php echo $material['ubicacion'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Proveedor:</label>
                <div class="col">
                    <input class="form-control" name="proveedor" placeholder="Proveedor" value="<?php echo $material['proveedor'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Cantidad:</label>
                <div class="col">
                    <input class="form-control" name="cantidad" placeholder="Cantidad" value="<?php echo $material['cantidad'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Observaciones:</label>
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