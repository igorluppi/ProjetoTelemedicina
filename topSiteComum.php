<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Painel E-Health</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

  <!-- Data Tabel -->
  <link rel="stylesheet" type="text/css" href="vendor/DataTables/datatables.min.css" />



  <!-- Custom styles -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">

</head>

<?php

function select_current($currentPage, $item_value) {
  if (!is_null($currentPage) && $currentPage == $item_value) {
    return 'bg-primary text-white';
  } else {
    return 'bg-light';
  }
}

?>

<body>

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading bg-light text-primary">
        <i class="fas fa-laptop-medical mr-2"></i>E-Health Buscas</div>
      <div class="list-group list-group-flush">
        <a href="#" style="cursor: default;" onclick="return(false)" class="list-group-item list-group-item-action bg-dark text-white">
        <i class="fas fa-binoculars mr-2"></i>Buscas</a>
        <a href="medicosConsulta.php" class="list-group-item list-group-item-action <?= select_current($currentPage, 'medicosConsulta') ?>">
          <i class="fas fa-user-md mr-2"></i>Médicos</a>
    
        <a href="home.php" class="list-group-item list-group-item-action bg-dark text-white mt-5"><i class="fas fa-home mr-2"></i>Home</a>
        <a href="index.php" class="list-group-item list-group-item-action bg-dark text-white" style="border-top: 1px solid rgba(255,255,255,.125);"><i class="fas fa-sign-out-alt mr-2"></i>Log-out</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-default" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>
      </nav>