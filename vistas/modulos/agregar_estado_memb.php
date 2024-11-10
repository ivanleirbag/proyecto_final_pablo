

<div class="col-lg-6 mt-3">
    <div class="card">

        <div class="card-header">
            <h5 class="card-title mb-0">Agregar estado de membresía</h5>
        </div><!-- end card header -->

        <div class="card-body">

            <form method="POST" action="">

            <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Nombre del estado</label>
                    <input type="text" id="example-input-normal" name="estado_memb" class="form-control" placeholder="Acvtivo/Inactivo/..." required>
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Descripción</label>
                    <input type="text" id="example-input-normal" name="desc_estado_memb" class="form-control" placeholder="..." required>
                </div>
                <?php
                $agregar = new ControladorEstadosMembresia();
                $agregar->ctrAgregarEstado();
                ?>

                <button class="btn btn-success" type="submit">Guardar</button>

            </form>
        </div>

    </div>
</div>