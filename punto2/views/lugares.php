    <!-- NavBar -->
    <?php require_once("Navbar.php") ?>

    <!-- Sidebar -->
    <?php require_once("sidebar.php") ?>

    <!-- Content -->

    <div class="container-fluid ">
        <div class="row">

            <div class="col-md-10 mx-auto">
                <div class="mt-4">
                    <div class="card-header bg-white">
                        <p class="card-title fw-bold fs-5"><i class="fa-solid fa-user-plus"></i>  Gestionar Lugares
                        </p>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <!-- Table -->
                        <table class="table table-bordered" id="tblLugar" width="100%">
                            <thead>
                                <tr>
                                    <th class="border">#ID</th>
                                    <th class="border">Lugar</th>
                                    <th class="border">Acciones</th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>

                    </div>

                </div>

                <form class="mx-3" action="" method="POST" id="frmLugar">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <input type="number" name="id" id="id" class="form-control" required placeholder="ID"
                                class="id">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="lugar" id="lugar" class="form-control" required
                                placeholder="Nombre del Lugar" class="lugar">
                        </div>


                        <div class="">
                            <button onclick="save()" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i>
                                Guardar</button>
                        </div>
                </form>

                <!-- Footer -->
                <?php require_once("Footer.php") ?>

                <script src="../public/js/lugarCrud.js"></script>


                </body>

                </html>