<div class="container mt-5">
    <h2 class="text-center">Editar Plan de Entrenamiento</h2>
    <?php
    if (isset($_GET["id"])) {
        $plan = ControladorPlanes::ctrMostrarPlanes("id_plan", $_GET["id"]);
    }
    ?>
    <form method="POST" action="">
        <div class="form-group">
            <label for="nombre_plan">Nombre del Plan</label>
            <input type="text" class="form-control" name="nombre_plan" value="<?php echo $plan["nombre_plan"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="descripcion_plan">Descripción</label>
            <textarea class="form-control" name="descrip_plan" rows="3" required><?php echo $plan["descrip_plan"]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="cod_plan">Código del plan</label>
            <input type="number" class="form-control" name="cod_plan" value="<?php echo $plan["cod_plan"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="duracion_plan">Duración (en semanas)</label>
            <input type="number" class="form-control" name="duracion_plan" value="<?php echo $plan["duracion_plan"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="sesiones_semanales_plan">Sesiones semanales</label>
            <input type="number" class="form-control" name="sesiones_semanales_plan" value="<?php echo $plan["sesiones_semanales_plan"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="id_entrenador">Entrenador designado</label>
            <input type="number" class="form-control" name="id_entrenador" value="<?php echo $plan["id_entrenador"]; ?>" required>
        </div>

        <input type="hidden" name="id_plan" value="<?php echo $plan["id_plan"]; ?>">

        <?php
        // Controlador para editar plan de entrenamiento
        $controladorPlan = new ControladorPlanes();
        $controladorPlan->ctrEditarPlan();
        ?>

        <button type="submit" class="btn btn-primary mt-3">Actualizar Plan</button>
    </form>
</div>

