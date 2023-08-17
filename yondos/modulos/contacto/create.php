
<!-- Modal para crear un nuevo usuario -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- Título del modal -->
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
        <!-- Botón para cerrar el modal -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Campo de entrada para el nombre del usuario -->
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="" placeholder="Ingresa Nombre">

        <!-- Campo de entrada para el teléfono del usuario -->
        <label for="">Teléfono</label>
        <input type="text" class="form-control" name="telefono" value="" placeholder="LADA + 1234567" >

        <!-- Campo de entrada para la fecha -->
        <label for="">Fecha</label>
        <input type="date" class="form-control" name="fecha" value="">
      </div>
      <div class="modal-footer">
        <!-- Botón para cerrar el modal -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- Botón para guardar los datos ingresados -->
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>