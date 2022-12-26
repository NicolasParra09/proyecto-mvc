    <!-- NavBar -->
    <?php require_once("Navbar.php") ?>

    <!-- Sidebar -->
    <?php require_once("sidebar.php") ?>

    <!-- Content -->

    <div class="container-fluid">
        <div class="row mb-5">

            <div class="col-md-4 mx-auto">
            <div class="mt-4 card">
                <div class="card-header bg-white">
                    <p class="text-success fw-bold fs-5"><i class="fa-solid fa-circle-plus me-2"></i>
                        Registrar Personaje
                    </p>
                </div>

                <form action="" method="POST" id="frmPersonaje" class="my-4">
                    <div class="row g-3 mx-2">
                        <div class="col-sm-6">
                            <input type="number" name="id" id="idPersonaje" class="form-control" required
                                placeholder="ID" class="id">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="nombre" id="nombre" class="form-control" required
                                placeholder="Nombre del personaje" class="nombre">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="estado" id="estado" class="form-control" required
                                placeholder="Estado" class="status">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="direccion" id="direccion" class="form-control" required
                                placeholder="Dirección" class="direccion">
                        </div>

                        <div class="">
                            <input type="button" id="registrar" value="Guardar" class="btn btn-success"></input>
                        </div>
                </form>
                </div>
            </div>
        </div>

        <div class="col-md-8 mx-auto">
            <div class="mt-4 card">
                <div class="card-header bg-white">
                    <p class="text-success fw-bold fs-5"><i class="fas fa-box-open"></i>
                        Gestionar Personaje
                    </p>
                </div>

            
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table style="word-wrap: break-word;" class="table table-sm table-bordered table-hover table-fit"
                        width="100%">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Nombre</th>
                                <th>Status</th>
                                <th>Dirección</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody id="tbPersonajes">

                        </tbody>
                    </table>

                </div>

            </div>
        </div>

        </div>
    </div>



    <!-- Modal Cliente -->
    <div class="modal fade" id="ModalEdit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title fw-bold text-white">Editar
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="" method="POST" id="frmEditPersonaje">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="">ID:</label>                            
                                <input type="number" name="id" id="idPersonaje_edit" class="form-control" required
                                    placeholder="ID" class="id" readonly>
                            </div>
                            <div class="col-sm-6">
                            <label for="">Nombre:</label> 
                                <input type="text" name="nombre" id="nombre_edit" class="form-control" required
                                    placeholder="Nombre del personaje" class="nombre">
                            </div>
                            <div class="col-sm-6">
                            <label for="">Estado:</label> 
                                <input type="text" name="estado" id="estado_edit" class="form-control" required
                                    placeholder="Estado" class="status">
                            </div>
                            <div class="col-sm-6">
                            <label for="">Direccion:</label> 
                                <input type="text" name="direccion" id="direccion_edit" class="form-control" required
                                    placeholder="Dirección" class="direccion">
                            </div>

                            <div class="modal-footer">
                                <a type="button" data-bs-dismiss="modal"><i
                                        class="fas fa-times"></i>
                                    Cancelar</a>
                                <a type="button" name="submit" class="btn btn-success" id="actualizar"><i class="fas fa-check"></i>
                                    Editar</a>
                            </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- Footer -->
    <?php require_once("Footer.php") ?>

    <script src="../public/js/personajeCrud.js"></script>


    </body>

    </html>