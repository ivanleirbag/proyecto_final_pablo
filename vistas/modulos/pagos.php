<?php

$pagos = ControladorPagos::ctrMostrarPagos(null, null);

?>
<div class="col-xl-12 mt-3">

    <a class="btn btn-dark" href="agregar_pago"><i class="fas fa-plus"></i> Agregar</a>

    <?php
    if (count($pagos) > 0) {
    ?>
        <div class="card mt-3">
            <div class="card-header">
                <h1 class="card-title mb-0">Pago</h1>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Fecha de pago</th>
                                <th scope="col">Plan de entrenamiento</th>
                                <th scope="col">Monto</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Estado de pago</th>
                                <th scope="col">Metodo de pago</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($pagos as $key => $value) { ?>
                                
                                <tr>
                                    <td><?php echo $value["id_pago"]; ?></td>
                                    <td><?php echo $value["fecha_pago"]; ?></td>
                                    <td><?php echo $value["nombre_plan"]; ?></td>
                                    <td><?php echo $value["monto_pago"]; ?></td>
                                    <td><?php echo $value["nombre_cliente"]; ?> <?php echo $value["apellido_cliente"];?></td>
                                    <td><?php echo $value["estado_pago"]; ?></td>
                                    <td><?php echo $value["nombre_metodoPago"]; ?></td>
                                    <td>
                                        <a href="editar_pago/<?php echo $value["id_pago"]; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                                        <button type="button" class="btn btn-danger btnEliminarPago" id_pago_eliminar="<?php echo $value["id_pago"]; ?>"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>

                            <?php } ?>
                            <?php ControladorPagos::ctrEliminarPago();?>

                            <input type="hidden" id="url" value="<?php echo $url; ?>">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    <?php
    } else {
    ?>

        <h3>No hay pagos disponibles</h3>

    <?php
    }
    ?>

</div>
