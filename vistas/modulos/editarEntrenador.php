<?php 
    // Cargamos el entrenador que se está editando y las listas de especialidades y estados de los entrenadores
    $entrenador = ControladorEntrenadores::ctrMostrarEntrenadores("id_entrenador", $_GET["id"]);
    $especialidades = ControladorEspecialidades::ctrMostrarEspecialidades(null, null);
    $estados_entrenadores = ControladorEstadosEntrenadores::ctrMostrarEstados(null, null);
?>

<div class="col-lg-6 mt-3">
    <div class="card">

        <div class="card-header">
            <h5 class="card-title mb-0">Editar entrenador</h5>
        </div><!-- end card header -->

        <div class="card-body">

            <form method="POST">
                <div class="mb-3">
                    <label for="nombre_entrenador" class="form-label">Nombre</label>
                    <input type="text" id="nombre_entrenador" name="nombre_entrenador" class="form-control" placeholder="Nombre" value="<?php echo $entrenador["nombre_entrenador"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="apellido_entrenador" class="form-label">Apellido</label>
                    <input type="text" id="apellido_entrenador" name="apellido_entrenador" class="form-control" placeholder="Apellido" value="<?php echo $entrenador["apellido_entrenador"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="dni_entrenador" class="form-label">DNI</label>
                    <input type="text" id="dni_entrenador" name="dni_entrenador" class="form-control" placeholder="DNI" value="<?php echo $entrenador["dni_entrenador"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="fechaContr_entrenador" class="form-label">Fecha de Contratación</label>
                    <input type="date" id="fechaContr_entrenador" name="fechaContr_entrenador" class="form-control" value="<?php echo $entrenador["fechaContr_entrenador"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="email_entrenador" class="form-label">Correo Electrónico</label>
                    <input type="email" id="email_entrenador" name="email_entrenador" class="form-control" placeholder="Correo Electrónico" value="<?php echo $entrenador["email_entrenador"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="telefono_entrenador" class="form-label">Teléfono</label>
                    <input type="text" id="telefono_entrenador" name="telefono_entrenador" class="form-control" placeholder="Teléfono" value="<?php echo $entrenador["telefono_entrenador"]; ?>" required>
                </div>

                <!-- Campo para el estado del entrenador -->
                <div class="mb-3">
                    <label for="id_estado_ent" class="form-label">Estado</label>
                    <select name="id_estado_ent" id="id_estado_ent" class="form-control" required>
                        <option value="">Seleccione una opción</option>
                        <?php foreach ($estados_entrenadores as $key => $value) { ?>
                            <option value="<?php echo $value["id_estado_ent"]; ?>" 
                                <?php if ($value["id_estado_ent"] == $entrenador["id_estado_ent"]) echo "selected"; ?>>
                                <?php echo $value["estado_ent"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Campo para la especialidad del entrenador -->
                <div class="mb-3">
                    <label for="id_especialidad" class="form-label">Especialidad</label>
                    <select name="id_especialidad" id="id_especialidad" class="form-control" required>
                        <option value="">Seleccione una especialidad</option>
                        <?php foreach ($especialidades as $key => $value) { ?>
                            <option value="<?php echo $value["id_especialidad"]; ?>" 
                                <?php if ($value["id_especialidad"] == $entrenador["id_especialidad"]) echo "selected"; ?>>
                                <?php echo $value["nombre_especialidad"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Campo oculto para pasar el ID del entrenador -->
                <input type="hidden" name="id_entrenador" value="<?php echo $_GET["id"]; ?>">

                <!-- Manejo del envío del formulario -->
                <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $editar = new ControladorEntrenadores();
                        $editar->ctrEditarEntrenador();
                    }
                ?>

                <!-- Botón de guardar -->
                <button class="btn btn-success" type="submit">Guardar</button>

            </form>
        </div><!-- end card body -->

    </div><!-- end card -->
</div><!-- end col -->


