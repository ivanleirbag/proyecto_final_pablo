<div class="container mt-5">
    <h2 class="text-center">Agregar Plan de Entrenamiento</h2>
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
            <input type="number" class="form-control" name="duracion_plan" required>
        </div>
        <div class="form-group">
            <label for="sesiones_semanales_plan">Sesiones semanales</label>
            <input type="number" class="form-control" name="sesiones_semanales_plan" required>
        </div>
        <div class="form-group">
            <label for="id_entrenador">Entrenador designado</label>
            <input type="number" class="form-control" name="id_entrenador" required>
        </div>

        <?php
        // Controlador para agregar plan de entrenamiento
        $controladorPlan = new ControladorPlanes();
        $controladorPlan->ctrAgregarPlan();
        ?>
        <button type="submit" class="btn btn-primary mt-3">Guardar Plan</button>
    </form>
</div>

