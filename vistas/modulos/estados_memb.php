<?php

$estados_memb = ControladorEstadosMembresia::ctrMostrarEstados(null, null);

?>
<div class="col-xl-12 mt-3">

    <a class="btn btn-dark" href="agregar_estado_memb"><i class="fas fa-plus"></i> Agregar</a>

    <?php
    if (count($estados_memb) > 0) {
    ?>
        <div class="card mt-3">
            <div class="card-header">
                <h1 class="card-title mb-0">Clientes</h1>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Descripción</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($estados_memb as $key => $value) { ?>

                                <tr>

                                    <td><?php echo $value["id_estado_memb"]; ?></td>
                                    <td><?php echo $value["estado_memb"]; ?></td>
                                    <td><?php echo $value["desc_estado_memb"]; ?></td>
                                    <td>
                                        <a href="editar_estado_memb/<?php echo $value["id_estado_memb"]; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                                        <button type="button" class="btn btn-danger btnEliminarEstadoMemb" id_estado_memb_eliminar="<?php echo $value["id_estado_memb"]; ?>"><i class="fas fa-trash"></i></button>
                                        <?php ControladorEstadosMembresia::ctrEliminarEstado();?>
                                    </td>
                                </tr>

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

        <h3>No hay clientes disponibles</h3>

    <?php
    }
    ?>

</div>
