
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema</title>
    <link rel="icon" href="./public/img/imankuco.jpeg">
    <link rel="stylesheet" href="./public/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/b65193eb61.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>

    <!-- Navbar -->

    <header>
        <nav class="navbar navbar-expand-md sticky-top navbar-light container-fluid flex-wrap flex-md-nowrap shadow-sm">

            
                <button class="navbar-toggler btn btn-light" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                    <a class="navbar-brand m-2">
            <img class="img-fluid navbar-brand" src="C:/xamppp/htdocs/PruebaTecnica-Softron/punto2/public/img/ImankuColombia.png" width="90"/> 
            </a>
                </button>
                
            


            <div class="collapse navbar-collapse bg-white justify-content-center" id="bdNavbar">
            <a class="navbar-brand m-2">
            <img class="img-fluid navbar-brand" src="../punto2/public/img/ImankuColombia.png" width="90"/> 
            </a>
                <ul class="navbar-nav flex-row flex-wrap py-md-0 fs-6">
                    <li>
                        <a class="nav-link fw-bold text-success border-start border-end px-4" href="./">
                            Inicio</a>
                    </li>
                    <li>
                        <a class="nav-link text-success border-end px-4" href="./views/personajes.php">Productos</a>
                    </li>
                    <li>
                        <a class="nav-link text-success border-end px-4" href="">Examples</a>
                    </li>
                    <li>
                        <a class="nav-link text-success border-end px-4" href="">Icons</a>
                    </li>
                    <li>
                        <a class="nav-link text-success px-4" href="">Themes</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>

<div class="col-10 mx-auto">
    <div class="card shadow-lg mt-4 pb-4 mx-3 border-success">
        <div class="row g-2">
            <div class="col-md-5 text-center mx-auto">
                <p class="fs-6 fw-bold text-success mt-3">Bienvenido Imanku!</p>
            </div>
        </div>
        <div class="ratio" style="height: 300px;">
            <iframe
                src="https://player.vimeo.com/video/542824755?h=c67a08a68e&amp;muted=1&amp;autoplay=1&amp;loop=1&amp;transparent=0&amp;background=1&amp;app_id=122963"
                class="embed-responsive-item" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen="" title="KU Brief" data-ready="true"></iframe>
        </div>

        <!-------------------------------------------------------------------------------->

        <div class="col-12 col-lg-10 col-md-8 container mt-4">
            <div class="row text-center d-flex justify-content-center">

            <p class="fw-bolder text-success pb-2">Servicios: </p>
                <!-- ventas(mes) -->
                <div class="col-xl-3 col-sm-11 col-md-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <a href="views/personajes.php" type="button" class="text-decoration-none fw-">
                                <i class="fa-brands fa-github fa-2x me-2 align-middle mb-1"></i> PRODUCTOS
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Ganancias(mes) -->
                <div class="col-xl-3 col-sm-11 col-md-5 ">
                    <div class="card shadow">
                        <div class="card-body">
                            <a href="#" type="button" class="text-decoration-none fw-">
                                <i class="fa-brands fa-github fa-2x me-2 align-middle mb-1"></i> VENTAS
                            </a>
                        </div>
                    </div>
                </div>


                <!-- proveedores -->
                <div class="col-xl-3 col-sm-11 col-md-5 ">
                    <div class="card shadow">
                        <div class="card-body">
                            <a href="#" type="button" class="text-decoration-none fw-">
                                <i class="fa-brands fa-github fa-2x me-2 align-middle mb-1"></i> VENTAS
                            </a>
                        </div>
                    </div>
                </div>

                <!-- proveedores -->
                <div class="col-xl-3 col-sm-11 col-md-5 ">
                    <div class="card shadow">
                        <div class="card-body">
                            <a href="#" type="button" class="text-decoration-none fw-">
                                <i class="fa-brands fa-github fa-2x me-2 align-middle mb-1"></i> VENTAS
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require_once("views/Footer.php") ?>