<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php
$materiales = find_all_materials();
?>
<?php $page_title = 'Materiales'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->

<div id="buscar_material_nombre">
    <h1>Buscar material por nombre</h1>
    <form action=<?php echo strtolower($page_title) . "_busqueda.php"; ?> method="post">
        <dl>
            <dt>Nombre</dt>
            <dd><input type="text" name="nombre" /></dd>
        </dl>
        <div id="operations">
            <input type="submit" />
        </div>
    </form>
</div>

<div id="buscar_material_codigo">
    <h1>Buscar material por codigo de barras</h1>
    <form action=<?php echo strtolower($page_title) . "_busqueda.php"; ?> method="post">
        <dl>
            <dt>Codigo de Barras</dt>
            <dd><input type="text" name="codigo_barras" /></dd>
        </dl>
        <div id="operations">
            <input type="submit" />
        </div>
    </form>
</div>

<div id="materiales">
    <h1>Lista de materiales</h1>
    <table class="list">
        <tr>
            <th>Codigo de barras</th>
            <th>Nombre</th>
            <th>Foto</th>
        </tr>

        <?php while ($material = mysqli_fetch_assoc($materiales)) { ?>
            <tr>
                <td><?php echo h($material['codigo_barras']); ?></td>
                <td><?php echo h($material['nombre']); ?></td>
                <td><?php echo "<img src=\"" . h($material['foto']) . "\" alt=\"Image\" height=\"42\" width=\"42\">"; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>


<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->