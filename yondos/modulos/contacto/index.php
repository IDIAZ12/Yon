<?php
include("../../conexion.php");

$stm = $conexion->prepare("SELECT * FROM contactos");
$stm->execute();
$contactos=$stm->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("../../template/header.php"); ?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create"> 
    Nuevo Usuario 
</button>

<div class="table-responsive">
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Fecha</th>
                <th>Acciones<th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($contactos as $contacto) {  ?>

                <tr class="">
                    <td scope="row"><?php echo $contacto['id']; ?> </td>
                    <td><?php echo $contacto['nombre']; ?></td>
                    <td><?php echo $contacto['telefono']; ?></td>
                    <td><?php echo $contacto['fecha']; ?></td>
                    <td>editar / eliminar</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include("create.php"); ?>

<?php include("../../template/footer.php"); ?>