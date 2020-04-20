<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$id = $_GET['id'] ?? '';

if (strcmp($id, "") == 0) {
    redirect_to("equipo.php");
}

$materiales = find_by_column("equipo", "codigo_barras", $id);

?>
<?php $page_title = 'Equipo'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('update', $_POST)) {
    updateMat("equipo", "nombre", $_POST['nombre']);
    updateMat("equipo", "foto", $_POST['url']);
    updateMat("equipo", "descripcion", $_POST['descripcion']);
    updateMat("equipo", "marca", $_POST['marca']);
    updateMat("equipo", "serie", $_POST['serie']);
    updateMat("equipo", "inventario_tec", $_POST['inventario_tec']);
    updateMat("equipo", "identificacion_interna", $_POST['identificacion_interna']);
    updateMat("equipo", "adquisicion", $_POST['adquisicion']);
    updateMat("equipo", "almacen", $_POST['almacen']);
    updateMat("equipo", "ubicacion", $_POST['ubicacion']);
    updateMat("equipo", "manual", $_POST['manual']);
    updateMat("equipo", "pno", $_POST['pno']);
    updateMat("equipo", "proveedor", $_POST['proveedor']);
    updateMat("equipo", "cantidad", $_POST['cantidad']);
    updateMat("equipo", "observaciones", $_POST['observaciones']);
    redirect_to("equipo.php");
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
                <label class="col col-form-label">Descripción</label>
                <div class="col">
                    <input class="form-control" name="descripcion" placeholder="Descripción" value="<?php echo $material['descripcion'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Marca:</label>
                <div class="col">
                    <input class="form-control" name="marca" placeholder="Marca" value="<?php echo $material['marca'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Serie</label>
                <div class="col">
                    <input class="form-control" name="serie" placeholder="Serie" value="<?php echo $material['serie'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Inventario TEC</label>
                <div class="col">
                    <input class="form-control" name="inventario_tec" placeholder="Inventario TEC" value="<?php echo $material['inventario_tec'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Identificacion Interna</label>
                <div class="col">
                    <input class="form-control" name="identificacion_interna" placeholder="Identificacion Interna" value="<?php echo $material['identificacion_interna'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Adquisición</label>
                <div class="col">
                    <input class="form-control" name="adquisicion" placeholder="Adquisición" value="<?php echo $material['adquisicion'] ?>">
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
                <label class="col col-form-label">PNO</label>
                <div class="col">
                    <input class="form-control" name="pno" placeholder="PNO" value="<?php echo $material['pno'] ?>">
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