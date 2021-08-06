<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="shortcut icon" href="logo-mywebsite-urian-viera.svg"/>
    <link href="css/material.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/home.css">
	<title>Cómo (Sumar - Restar) Dia - Mes - Año a una fecha con PHP :: Webdeveloper Urian Viera </title>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #55468c !important;">
  <a class="navbar-brand" href="#">
   <strong style="color: #fff">WebDeveloper</strong>
  </a>
</nav>


<div class="container mt-5"> 
  
  <h3 class="text-center mb-5" style="font-weight: 800; font-size: 35px">
    Cómo (Sumar - Quitar) Dia, Mes y Año a una fecha con PHP <strong>Archivo</strong> 
    <hr>
  </h3>
Como-agregar-Dia-Mes-Year-a-Fecha-con-PHP

<div class="row text-center">
    <div class="col-md-6">
      <p  id="titleP">
        Agregar Dia, Mes y Año
      </p>
    <?php 
      $fechaDiaUno = date("Y-m-d");
      echo '<p id="dia">Agregando Dia: '. date('Y-m-d', strtotime($fechaDiaUno. ' + 1 days')).'</p>';

      $fechaMesDos = date("Y-m-d");
      echo '<p id="mes">Agregando Dia: '. date('Y-m-d', strtotime($fechaMesDos. ' + 1 month')).'</p>';

      $fechaYearDos = date("Y-m-d");
      echo '<p id="year">Agregando Dia: '. date('Y-m-d', strtotime($fechaYearDos. ' + 1 year')).'</p>';
    ?>
  </div>


    
    <div class="col-md-6">
      <p id="titleP" style="font-size:20px;">
        Restar Dia, Mes y Año
      </p>

  <?php 
    $fechaDiaRestar = date("Y-m-d");
    echo '<p id="diaUno">Restando Dia: '. date('Y-m-d', strtotime($fechaYearDos. ' - 1 days')).'</p>';

    $fechaMesRestar = date("Y-m-d");
    echo '<p id="mesDos">Restando Mes: '. date('Y-m-d', strtotime($fechaMesRestar. ' - 1 month')).'</p>';

    $fechaYearRestar = date("Y-m-d");
    echo '<p id="yearDos">Agregando Año: '. date('Y-m-d', strtotime($fechaYearRestar. ' - 1 year')).'</p>';
  ?>

    </div>
  </div>


</div>

</body>
</html>