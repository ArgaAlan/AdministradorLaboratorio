<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Laboratorios de medicina</title>
</head>
<body>


<nav class="navbar" style="background-color: #1B264F">

    <img src="src/logo.jpeg" width="170" height="50" class="d-inline-block align-top" alt="logo">
    <h1 class="display-4 text-white">Laboratorios Medicina</h1>
    <button class="btn btn-lg btn-outline-success" type="button">Iniciar sesion </button>

</nav>

<br><br><br>
<div class="container-fluid">
    <div class="row mx-auto">
        <div class="col-7">
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active " data-interval="6000">
                            <img src="src/foto1.jpg" class="rounded mx-auto d-block" width="1024" height="650" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="6000">
                        <img src="src/foto2.jpg" class="rounded mx-auto d-block" width="1024" height="650" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="6000">
                        <img src="src/foto3.jpg" class="rounded mx-auto d-block" width="1024" height="650" alt="...">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="row">
                <div class="col">
                    <div class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">
                                <img src="src/foto3.jpg" class="rounded mx-auto d-block" width="640" height="300" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="10000">
                                <img src="src/foto2.jpg" class="rounded mx-auto d-block" width="640" height="300" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="10000">
                                <img src="src/foto1.jpg" class="rounded mx-auto d-block" width="640" height="300" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <br><br>
            <div class="row">
                <div class="col">
                    <div class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">
                                <img src="src/foto2.jpg" class="rounded mx-auto d-block" width="640" height="300" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="10000">
                                <img src="src/foto3.jpg" class="rounded mx-auto d-block" width="640" height="300" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="10000">
                                <img src="src/foto1.jpg" class="rounded mx-auto d-block" width="640" height="300" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="mx-auto">
                <a href="lab.php" class="btn btn-block btn-lg mx-auto text-white" type="button" style="margin: 10px 40px 10px 10px;background-color: #1B264F">
                    Laboratorio
                </a>
            </div>
        </div>
        <div class="col">
            <div class="mx-auto">
                <div class="dropup">
                    <button type="button" class="btn btn-block btn-lg mx-auto text-white dropdown-toggle" style="margin: 10px 40px 10px 10px;background-color: #1B264F" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        Equipo
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg-right">
                        <a class="dropdown-item" href="view/consumibles.php">Consumibles</a>
                        <a class="dropdown-item" href="view/equipo.php">Equipo</a>
                        <a class="dropdown-item" href="view/materiales.php">Materiales</a>
                        <a class="dropdown-item" href="view/proveedores.php">Proveedores</a>
                        <a class="dropdown-item" href="view/reactivos.php">Reactivos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="mx-auto">
                <a href="https://my.labagenda.com/" class="btn btn-block btn-lg mx-auto text-white" type="button" style="margin: 10px 40px 10px 10px;background-color: #1B264F">
                    Reservaciones
                </a>
            </div>
        </div>
        <div class="col">
            <div class="mx-auto">
                <a href="contacto.php" class="btn btn-block btn-lg mx-auto text-white" type="button" style="margin: 10px 40px 10px 10px;background-color: #1B264F">
                    Contacto
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>