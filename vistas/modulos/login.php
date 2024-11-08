<body class="bg-color">

    <!-- Begin page -->
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-12">
                <div class="p-0">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6 col-xl-6 col-lg-6">
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <div class="mb-0 border-0">
                                        <div class="p-0">
                                            <div class="text-center">
                                              
                                                <div class="auth-title-section mb-3">
                                                    <h3 class="text-dark fs-20 fw-medium mb-2">Bienvenidos</h3>
                                                    <p class="text-dark text-capitalize fs-14 mb-0">Ingrese sus datos</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pt-0">
                                            <form method="POST" class="my-4">
                                                <div class="form-group mb-3">
                                                    <label for="email" class="form-label">Email address</label>
                                                    <input class="form-control" type="email" name="email" required="" placeholder="Ingrese su email">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input class="form-control" type="password" required="" name="password" placeholder="Ingrese su password">
                                                </div>

                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary" type="submit"> Ingresar </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php 
                                                $ingreso = new ControladorUsuarios();
                                                $ingreso -> ctrIngresoUsuario();
                                                ?>
                                            </form>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-6 col-lg-6 p-0 vh-100 d-flex justify-content-center account-page-bg">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END wrapper -->

</body>