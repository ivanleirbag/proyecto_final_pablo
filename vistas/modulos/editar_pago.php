<?php
$pagos = ControladorPagos::ctrMostrarPagos("id_pago", $_GET["id"]);
$clientes = ControladorClientes::ctrMostrarClientes(null, null);
$estados_pago = ControladorEstadosPago::ctrMostrarEstados(null, null);
$metodosPago = ControladorMetodosPago::ctrMostrarMetodosPago(null, null);
$planes = ControladorPlanes::ctrMostrarPlanes(null, null);
?>

<div class="col-lg-6 mt-3">
    <div class="card">

        <div class="card-header">
            <h5 class="card-title mb-0">Editar pago</h5>
        </div><!-- end card header -->

        <div class="card-body">

            <form method="POST">
                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Plan de entrenamiento</label>
                    <select name="id_plan" id="id_plan" class="form-control" required>
                        <option value="">Seleccione una opción</option>
                        <?php foreach ($planes as $key => $value) { ?>
                            <option value="<?php echo $value["id_plan"]; ?>" 
                                <?php if ($value["id_plan"] == $pagos["id_plan"]) echo "selected"; ?>>
                                <?php echo $value["nombre_plan"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Fecha de pago</label>
                    <input type="date" id="example-input-normal" name="fecha_pago" class="form-control" value="<?php echo $pagos["fecha_pago"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="monto_pago" class="form-label">Monto</label>
                    <input type="number" id="monto_pago" name="monto_pago" class="form-control" placeholder="00.00" step="0.01" min="0" value="<?php echo $pagos["monto_pago"]?>" required>
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Cliente</label>
                    <select name="id_cliente" id="id_cliente" class="form-control" required>
                        <option value="">Seleccione una opción</option>
                        <?php foreach ($clientes as $key => $value) { ?>
                            <option value="<?php echo $value["id_cliente"]; ?>" 
                                <?php if ($value["id_cliente"] == $pagos["id_cliente"]) echo "selected"; ?>>
                                <?php echo $value["id_cliente"]; ?>"><?php echo $value["nombre_cliente"]; ?> <?php echo $value["apellido_cliente"]; ?> DNI: <?php echo $value["dni_cliente"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Estado de pago</label>
                    <select name="id_estado" id="id_estado" class="form-control" required>
                        <option value="">Seleccione una opción</option>
                        <?php foreach ($estados_pago as $key => $value) { ?>
                            <option value="<?php echo $value["id_estado_pago"]; ?>" 
                                <?php if ($value["id_estado"] == $pagos["id_estado_pago"]) echo "selected"; ?>>
                                <?php echo $value["estado_pago"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Metodo de pago</label>
                    <select name="id_metodopago" id="id_metodopago" class="form-control" required>
                        <option value="">Seleccione una opción</option>
                        <?php foreach ($metodosPago as $key => $value) { ?>
                            <option value="<?php echo $value["id_metodoPago"]; ?>" 
                                <?php if ($value["id_metodoPago"] == $pagos["id_metodopago"]) echo "selected"; ?>>
                                <?php echo $value["nombre_metodoPago"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>           

                <input type="hidden" name="id_pago" value="<?php echo $pagos["id_pago"]; ?>">

                <?php
                $editar = new ControladorPagos();
                $editar->ctrEditarPago();
                ?>

                <button class="btn btn-success" type="submit">Guardar</button>

            </form>
        </div>

    </div>
</div>