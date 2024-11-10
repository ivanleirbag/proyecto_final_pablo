<?php
$cliente = ControladorClientes::ctrMostrarClientes("id_cliente", $_GET["id"]);
$estados_memb = ControladorEstadosMembresia::ctrMostrarEstados(null, null);
?>

<div class="col-lg-6 mt-3">
    <div class="card">

        <div class="card-header">
            <h5 class="card-title mb-0">Editar cliente</h5>
        </div><!-- end card header -->

        <div class="card-body">

            <form method="POST">
                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Nombre</label>
                    <input type="text" id="example-input-normal" name="nombre_cliente" class="form-control" placeholder="Nombre" value="<?php echo $cliente["nombre_cliente"]; ?>"  required>
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Apellido</label>
                    <input type="text" id="example-input-normal" name="apellido_cliente" class="form-control" placeholder="Apellido" value="<?php echo $cliente["apellido_cliente"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">DNI</label>
                    <input type="text" id="example-input-normal" name="dni_cliente" class="form-control" placeholder="DNI" value="<?php echo $cliente["dni_cliente"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" id="example-input-normal" name="fechaNac_cliente" class="form-control" value="<?php echo $cliente["fechaNac_cliente"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Dirección</label>
                    <input type="text" id="example-input-normal" name="direccion_cliente" class="form-control" placeholder="Dirección" value="<?php echo $cliente["direccion_cliente"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Teléfono</label>
                    <input type="text" id="example-input-normal" name="telefono_cliente" class="form-control" placeholder="Teléfono" value="<?php echo $cliente["telefono_cliente"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Correo Electrónico</label>
                    <input type="email" id="example-input-normal" name="email_cliente" class="form-control" placeholder="Correo Electrónico" value="<?php echo $cliente["email_cliente"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Fecha de Inscripción</label>
                    <input type="date" id="example-input-normal" name="fechaIns_cliente" class="form-control" value="<?php echo $cliente["fechaIns_cliente"]; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Plan de Entrenamiento</label>
                    <input type="text" id="example-input-normal" name="id_plan" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="form-label">Estado de Membresía</label>
                    <select name="id_estado_memb" id="id_estado_memb" class="form-control" required>
                        <option value="">Seleccione una opción</option>
                        <?php
                            foreach ($estados_memb as $key => $value){ ?>
                                <option value="<?php echo $value["id_estado_memb"]; ?>"><?php echo $value["estado_memb"]; ?></option>
                            <?php }?>
                    </select>
                </div>

                <input type="hidden" name="id_cliente" value="<?php echo $cliente["id_cliente"]; ?>">

                <?php
                $editar = new ControladorClientes();
                $editar->ctrEditarCliente();
                ?>

                <button class="btn btn-success" type="submit">Guardar</button>

            </form>
        </div>

    </div>
</div>