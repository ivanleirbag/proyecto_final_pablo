<div class="container mt-5">
    <h2 class="text-center">Lista de Planes de Entrenamiento</h2>
    <div class="text-right mb-3">
        <a href="<?php echo $url; ?>index.php?pagina=agregar_plan" class="btn btn-primary">Agregar Plan de Entrenamiento</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Plan</th>
                <th>Descripción</th>
                <th>Duración</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $planes = ControladorPlanes::ctrMostrarPlanes(null, null);
            foreach ($planes as $plan) {
                echo '<tr>
                    <td>' . $plan["id_plan"] . '</td>
                    <td>' . $plan["nombre_plan"] . '</td>
                    <td>' . $plan["descripcion_plan"] . '</td>
                    <td>' . $plan["duracion_plan"] . '</td>
                    <td>' . $plan["precio_plan"] . '</td>
                    <td>
                        <a href="' . $url . 'index.php?pagina=editar_plan&id=' . $plan["id_plan"] . '" class="btn btn-warning btn-sm">Editar</a>
                        <a href="' . $url . 'index.php?pagina=planes_entrenamiento&id_eliminar=' . $plan["id_plan"] . '" class="btn btn-danger btn-sm btnEliminarPlan">Eliminar</a>
                    </td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
</div>
