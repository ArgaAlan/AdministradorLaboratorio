<?php require_once('../functions/initialize.php'); ?>
<?php
$materiales = find_all_materials();
?>
<?php $page_title = 'Materiales'; ?>
<?php include('../functions/pages/staff_header.php'); ?>
<div id="materiales">

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
                <td><?php echo h($material['foto']); ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php include('../functions/pages/staff_footer.php'); ?>