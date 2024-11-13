<?php
$entrenadores = ControladorEntrenadores::ctrMostrarEntrenadores(null, null);
?>

<div class="col-lg-6 mt-3">
    <div class="card">

        <div class="card-header">
            <h5 class="card-title mb-0">Agregar entrenador</h5>
        </div><!-- end card header -->

        <div class="card-body">

            <form method="POST" action="">

            <div class="form-group">
                <label for="nombre_plan">Nombre del Plan</label>
                <input type="text" class="form-control" name="nombre_plan" required>
            </div>
            <div class="form-group">
                <label for="descripcion_plan">Descripción</label>
                <textarea class="form-control" name="descrip_plan" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="cod_plan">Código del plan</label>
                <input type="number" class="form-control" name="cod_plan" required>
            </div>
            <div class="form-group">
                <label for="duracion_plan">Duración (en semanas)</label>
                <input type="number" class="form-control" name="duracion_plan"  required>
            </div>
            <div class="form-group">
                <label for="sesiones_semanales_plan">Sesiones semanales</label>
                <input type="number" class="form-control" name="sesiones_semanales_plan" required>
            </div>
            <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Entrenador designado</label>
                    <select name="id_entrenador" id="id_entrenador" class="form-control" required>
                        <option value="">Seleccione una opción</option>
                        <?php
                            foreach ($entrenadores as $key => $value){ ?>
                                <option value="<?php echo $value["id_entrenador"]; ?>"><?php echo $value["nombre_entrenador"]; ?> <?php echo $value["apellido_entrenador"]; ?></option>
                            <?php }?>
                    </select>
                </div>
            <?php
            // Controlador para editar plan de entrenamiento
            $controladorPlan = new ControladorPlanes();
            $controladorPlan->ctrAgregarPlan();
            ?>

            <button type="submit" class="btn btn-primary mt-3">Añadir Plan</button>

            </form>
        </div>

    </div>
</div>