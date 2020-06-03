<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php $page_title = 'Reportes'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<?php
if (array_key_exists('create', $_POST)) {
    createReport("reporte", $_POST['day'], $_POST['month'], $_POST['year'], $_POST['material'], $_POST['laboratorio'], $_POST['existencia'], $_POST['modificacion'], $_POST['observaciones']);
    //redirect_to("reportes.php");
}
function createReport($table, $day, $month, $year, $material, $laboratorio, $existencia, $modificaciones,  $observaciones)
{
    global $db;

    $sql = "INSERT INTO " . $table . " (day,month,year,material,laboratorio,existencia,modificacion,observaciones) ";
    //ESCRIBIR TODOS LOS VALORES 
    $sql .= "VALUES (" . $day . "," . $month . "," . $year . ",\"" . $material . "\",\"" . $laboratorio . "\",\"" . $existencia . "\",\"" . $modificaciones  . "\",\"" . $observaciones . "\")";
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
                <label class="col col-form-label">Día:</label>
                <div class="col">
                    <input class="form-control" name="day" placeholder="Día">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Mes:</label>
                <div class="col">
                    <input class="form-control" name="month" placeholder="Mes">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Año</label>
                <div class="col">
                    <input class="form-control" name="year" placeholder="Año">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Material</label>
                <div class="col">
                    <input class="form-control" name="material" placeholder="Material">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Laboratorio:</label>
                <div class="col">
                    <input class="form-control" name="laboratorio" placeholder="Laboratorio">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Existencia:</label>
                <div class="col">
                    <input class="form-control" name="existencia" placeholder="Existencia">
                </div>
            </div>
            <div class="form-group row">
                <label class="col col-form-label">Modificación:</label>
                <div class="col">
                    <input class="form-control" name="modificacion" placeholder="Modificación">
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