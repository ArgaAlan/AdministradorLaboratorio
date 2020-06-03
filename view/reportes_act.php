<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$id = $_GET['id'] ?? '';

if (strcmp($id, "") == 0) {
    redirect_to("reportes.php");
}

$reportes = find_by_column("reporte", "id", $id);

?>
<?php $page_title = 'Reportes'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('update', $_POST)) {
    updateReport("reporte", "day", $_POST['day']);
    updateReport("reporte", "month", $_POST['month']);
    updateReport("reporte", "year", $_POST['year']);
    updateReport("reporte", "material", $_POST['material']);
    updateReport("reporte", "laboratorio", $_POST['laboratorio']);
    updateReport("reporte", "existencia", $_POST['existencia']);
    updateReport("reporte", "modificacion", $_POST['modificacion']);
    updateReport("reporte", "observaciones", $_POST['observaciones']);
    redirect_to("reportes.php");
}
function updateReport($table, $field, $value)
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
<?php $reporte = mysqli_fetch_assoc($reportes) ?>

<br>

<div class="container">

    <!--Formulario-->

    <div class="row">
        <form name="form" method="post">
            <div class="form-group row">
                <label class="col col-form-label">Día:</label>
                <div class="col">
                    <input class="form-control" name="day" placeholder="Día" value="<?php echo $reporte['day'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Mes:</label>
                <div class="col">
                    <input class="form-control" name="month" placeholder="Mes" value="<?php echo $reporte['month'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Año:</label>
                <div class="col">
                    <input class="form-control" name="year" placeholder="Año" value="<?php echo $reporte['year'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Material:</label>
                <div class="col">
                    <input class="form-control" name="material" placeholder="Material" value="<?php echo $reporte['material'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Laboratorio:</label>
                <div class="col">
                    <input class="form-control" name="laboratorio" placeholder="Laboratorio" value="<?php echo $reporte['laboratorio'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Existencia:</label>
                <div class="col">
                    <input class="form-control" name="existencia" placeholder="Existencia" value="<?php echo $reporte['existencia'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Modificaciones:</label>
                <div class="col">
                    <input class="form-control" name="modificacion" placeholder="Modificacion" value="<?php echo $reporte['modificacion'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Observaciones:</label>
                <div class="col">
                    <input class="form-control" name="observaciones" placeholder="Observaciones" value="<?php echo $reporte['observaciones'] ?>">
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