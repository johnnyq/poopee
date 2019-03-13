<?php 
  include("config.php");
  include("check_login.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>PooPee Log</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-html5-1.5.1/b-print-1.5.1/r-2.2.1/datatables.min.css"/>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">PooPee Log</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <?php if($session_user_access > 0 ){ ?>
          <li class="nav-item">
            <a class="nav-link" href="records.php">Records</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reports.php">Reports</a>
          </li>
          <?php } ?>
          <?php if($session_user_access > 2 ){ ?>
          <li class="nav-item">
            <a class="nav-link" href="users.php">Users</a>
          </li>
          <?php } ?>
        </ul>
        <?php if(!$_SESSION['logged']){ ?>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
        <?php }else{ ?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><?php echo $session_username; ?></a>
          </li>
        </ul>
        <?php } ?>
      </div>
    </nav>
    <main role="main" class="container">