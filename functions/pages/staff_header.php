<?php
if (!isset($page_title)) {
  $page_title = 'Laboratorios medicina';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="../css/style.css" rel="stylesheet">

  <title><?php echo $page_title ?></title>
</head>

<body>
  <!--NAVBAR DE DANIEL-->
  <header class="w3-container w3-blue-grey" style="height: 100px">
    <div style="float: left; padding-top: 1.1%; width: 10%">
      <img alt="logo" src="../src/logo.jpeg" style="width:90%">
    </div>
    <div style="float: left; padding: .8% 1% 1% 5%;width: 70%">
      <h2 style="font-size: 1.8vw"><u><?php echo $page_title ?></u></h2>
    </div>
    <div style="float: right; padding-top: 1.6%; width: 20%">
      <button style="font-size: .8vw" type="button">Iniciar sesión</button>
    </div>
  </header>
  <!--NAVBAR DE DANIEL-->