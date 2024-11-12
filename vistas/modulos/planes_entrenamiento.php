<?php

$planes = ControladorPlanes::ctrMostrarPlanes(null, null);

?>
<div class="col-xl-12 mt-3">

    <a class="btn btn-dark" href="agregar_plan"><i class="fas fa-plus"></i> Agregar</a>

    <?php
    if (count($planes) > 0) {
    ?>
        <div class="card mt-3">
            <div class="card-header">
                <h1 class="card-title mb-0">Planes</h1>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Código</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Sesiones semanales</th>
                                <th scope="col">Entrenador designado</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($planes as $key => $value) { ?>

                                <tr>

                                    <td><?php echo $value["id_plan"]; ?></td>
                                    <td><?php echo $value["nombre_plan"]; ?></td>
                                    <td><?php echo $value["cod_plan"]; ?></td>
                                    <td><?php echo $value["descrip_plan"]; ?></td>
                                    <td><?php echo $value["duracion_plan"]; ?></td>
                                    <td><?php echo $value["sesiones_semanales_plan"]; ?></td>
                                    <td><?php echo $value["nombre_entrenador"]; ?></td>
                                    <td>
                                        <a href="editar_plan/<?php echo $value["id_plan"]; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                                        <button type="button" class="btn btn-danger btnEliminarPlan" id_plan_eliminar="<?php echo $value["id_plan"]; ?>"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php ControladorPlanes::ctrEliminarPlan();?>
                            <?php } ?>

                            <input type="hidden" id="url" value="<?php echo $url; ?>">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    <?php
    } else {
    ?>

        <h3>No hay planes disponibles</h3>

    <?php
    }
    ?>

</div>
