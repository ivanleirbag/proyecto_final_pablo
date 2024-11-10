<div class="container mt-5">
    <h2 class="text-center">Editar Plan de Entrenamiento</h2>
    <?php
    if (isset($_GET["id"])) {
        $plan = ControladorPlanes::ctrMostrarPlanes("id_plan", $_GET["id"]);
    }
    ?>
    <form method="POST" action="">
        <input type="hidden" name="id_plan" value="<?php echo $plan["id_plan"]; ?>">
        <div class="form-group">
            <label for="nombre_plan">Nombre del Plan</label>
            <input type="text" class="form-control" name="nombre_plan" value="<?php echo $plan["nombre_plan"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="descripcion_plan">Descripción</label>
            <textarea class="form-control" name="descripcion_plan" rows="3" required><?php echo $plan["descripcion_plan"]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="duracion_plan">Duración (en semanas)</label>
            <input type="number" class="form-control" name="duracion_plan" value="<?php echo $plan["duracion_plan"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="precio_plan">Precio</label>
            <input type="number" class="form-control" name="precio_plan" value="<?php echo $plan["precio_plan"]; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Actualizar Plan</button>
    </form>
</div>
<?php
// Controlador para editar plan de entrenamiento
$controladorPlan = new ControladorPlanes();
$controladorPlan->ctrEditarPlan();
?>
