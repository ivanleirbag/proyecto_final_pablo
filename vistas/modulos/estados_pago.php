<?php

$estados_pago = ControladorEstadosPago::ctrMostrarEstados(null, null);

?>
<div class="col-xl-12 mt-3">

    <a class="btn btn-dark" href="agregar_estado_pago"><i class="fas fa-plus"></i> Agregar</a>

    <?php
    if (count($estados_pago) > 0) {
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
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($estados_pago as $key => $value) { ?>

                                <tr>

                                    <td><?php echo $value["id_estado_pago"]; ?></td>
                                    <td><?php echo $value["estado_pago"]; ?></td>
                                    <td>
                                        <a href="editar_estado_pago/<?php echo $value["id_estado_pago"]; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                                        <button type="button" class="btn btn-danger btnEliminarEstadoPago" id_estado_pago_eliminar="<?php echo $value["id_estado_pago"]; ?>"><i class="fas fa-trash"></i></button>
                                        
                                    </td>
                                </tr>
                                
                            <?php } ?>
                            <?php ControladorEstadosPago::ctrEliminarEstado();?>
                                
                            <input type="hidden" id="url" value="<?php echo $url; ?>">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    <?php
    } else {
    ?>

        <h3>No hay estados disponibles</h3>

    <?php
    }
    ?>

</div>
