<?php
if (!isset($page_title)) {
  $page_title = 'Laboratorios medicina';
}
$user = '';
if (isset($_POST["values"])) {
  for ($i = 0; $i < count($_POST["values"]); $i++) {
    if ($_POST["values"][$i] == "found") {
      $user = "found";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title><?php echo $page_title ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1B264F;">
    <img src="../src/logo.jpeg" width="100" height="30" class="d-inline-block align-top" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php" style="color: #ffffff !IMPORTANT;">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $page_title . ".php" ?>" style="color: #ffffff !IMPORTANT;"> <?php echo $page_title ?> </a>
        </li>
        <!--Aqui iran los demas departamentos-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffffff !IMPORTANT;">
            Sitios
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <form action="consumibles.php" method="post">
              <input type="hidden" name="values[]" value="<?php echo $user ?>">
              <button class="dropdown-item" type="submit" value="user">Consumibles</button>
            </form>
            <form action="materiales.php" method="post">
              <input type="hidden" name="values[]" value="<?php echo $user ?>">
              <button class="dropdown-item" type="submit" value="user">Materiales</button>
            </form>
            <form action="equipo.php" method="post">
              <input type="hidden" name="values[]" value="<?php echo $user ?>">
              <button class="dropdown-item" type="submit" value="user">Equipo</button>
            </form>
            <form action="proveedores.php" method="post">
              <input type="hidden" name="values[]" value="<?php echo $user ?>">
              <button class="dropdown-item" type="submit" value="user">Proveedores</button>
            </form>
            <form action="reactivos.php" method="post">
              <input type="hidden" name="values[]" value="<?php echo $user ?>">
              <button class="dropdown-item" type="submit" value="user">Reactivos</button>
            </form>
            <form action="reportes.php" method="post">
              <input type="hidden" name="values[]" value="<?php echo $user ?>">
              <button class="dropdown-item" type="submit" value="user">Resportes</button>
            </form>
          </div>
        </li>
      </ul>
      <?php
      if ($page_title != 'Inicio de sesion' && $user != "found")
        echo "
          <form class=\"form-inline my-2 my-lg-0\" action=login.php method=\"post\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Iniciar Sesion</button>
          </form>
        ";
      ?>

    </div>
  </nav>