<?php
// Incluir el archivo de conexión a la base de datos
include("../../conexion.php");

// Preparar y ejecutar una consulta para seleccionar todos los contactos
$stm = $conexion->prepare("SELECT * FROM contactos");
$stm->execute();

// Obtener los resultados de la consulta en forma de matriz asociativa
$contactos = $stm->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("../../template/header.php"); ?>

<!-- Botón para abrir el modal de creación de usuario -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create"> 
    Nuevo Usuario 
</button>

<!-- Tabla de contactos responsive -->
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
            <!-- Ciclo para iterar a través de los contactos y mostrarlos en la tabla -->
            <?php foreach ($contactos as $contacto) { ?>
                <tr>
                    <td scope="row"><?php echo $contacto['id']; ?></td>
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
