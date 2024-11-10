<div class="container mt-5">
    <h2 class="text-center">Agregar Plan de Entrenamiento</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="nombre_plan">Nombre del Plan</label>
            <input type="text" class="form-control" name="nombre_plan" required>
        </div>
        <div class="form-group">
            <label for="descripcion_plan">Descripción</label>
            <textarea class="form-control" name="descripcion_plan" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="duracion_plan">Duración (en semanas)</label>
            <input type="number" class="form-control" name="duracion_plan" required>
        </div>
        <div class="form-group">
            <label for="precio_plan">Precio</label>
            <input type="number" class="form-control" name="precio_plan" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar Plan</button>
    </form>
</div>
<?php
// Controlador para agregar plan de entrenamiento
$controladorPlan = new ControladorPlanes();
$controladorPlan->ctrAgregarPlan();
?>
