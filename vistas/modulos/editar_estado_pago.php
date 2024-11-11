<?php
$estados_pago = ControladorEstadosPago::ctrMostrarEstados("id_estado_pago", $_GET["id"]);
?>

<div class="col-lg-6 mt-3">
    <div class="card">

        <div class="card-header">
            <h5 class="card-title mb-0">Editar estado de pago</h5>
        </div><!-- end card header -->

        <div class="card-body">

            <form method="POST">
                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Nombre del estado</label>
                    <input type="text" id="example-input-normal" name="estado_pago" class="form-control" placeholder="Realizado/En proceso/..." value="<?php echo $estados_pago["estado_pago"]; ?>" required>
                </div>

                <input type="hidden" name="id_estado_pago" value="<?php echo $estados_pago["id_estado_pago"]; ?>">

                <?php
                $editar = new ControladorEstadosPago();
                $editar->ctrEditarEstado();
                ?>

                <button class="btn btn-success" type="submit">Guardar</button>

            </form>
        </div>

    </div>
</div>