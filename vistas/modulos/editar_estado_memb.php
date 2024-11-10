<?php
$estados_memb = ControladorEstadosMembresia::ctrMostrarEstados("id_estado_memb", $_GET["id"]);
?>

<div class="col-lg-6 mt-3">
    <div class="card">

        <div class="card-header">
            <h5 class="card-title mb-0">Editar estado de membresía</h5>
        </div><!-- end card header -->

        <div class="card-body">

            <form method="POST">
                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Nombre del estado</label>
                    <input type="text" id="example-input-normal" name="estado_memb" class="form-control" placeholder="Acvtivo/Inactivo/..." value="<?php echo $estados_memb["estado_memb"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Descripción</label>
                    <input type="text" id="example-input-normal" name="desc_estado_memb" class="form-control" placeholder="..." value="<?php echo $estados_memb["desc_estado_memb"]; ?>" required>
                </div>

                <input type="hidden" name="id_estado_memb" value="<?php echo $estados_memb["id_estado_memb"]; ?>">

                <?php
                $editar = new ControladorEstadosMembresia();
                $editar->ctrEditarEstado();
                ?>

                <button class="btn btn-success" type="submit">Guardar</button>

            </form>
        </div>

    </div>
</div>