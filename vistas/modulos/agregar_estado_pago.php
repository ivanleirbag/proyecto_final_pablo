<div class="col-lg-6 mt-3">
    <div class="card">

        <div class="card-header">
            <h5 class="card-title mb-0">Agregar estado de pago</h5>
        </div><!-- end card header -->

        <div class="card-body">

            <form method="POST" action="">

            <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Nombre del estado</label>
                    <input type="text" id="example-input-normal" name="estado_pago" class="form-control" placeholder="Realizado/En proceso/..." required>
                </div>
                <?php
                $agregar = new ControladorEstadosPago();
                $agregar->ctrAgregarEstado();
                ?>

                <button class="btn btn-success" type="submit">Guardar</button>

            </form>
        </div>

    </div>
</div>