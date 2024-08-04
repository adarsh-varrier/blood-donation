<?php

require 'config/database.php';

if(!isset($_SESSION['usr-id']))

{
  header('location:' .ROOT_URL . 'login.php');
  die();
  
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style-min.css">
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/img/apple-icon.png">
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">

    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/css/demo.css" rel="stylesheet">
    <title>Hemacare</title>
</head>

<body>

    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark danger-color">
        <a class="navbar-brand" href="../index.php" color="white">Hemacare</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                
                    
               
                 <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT_URL ?>reciever.php">Receiver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT_URL ?>doners.php">Doners</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default"
                        aria-labelledby="navbarDropdownMenuLink-333">
                        <?php if(isset($_SESSION['usr-id'])) : ?>
                        
                        <a class="dropdown-item" href="index.php">dashboard</a>
                        <a class="dropdown-item" href="../logout.php">logout</a>
                        <?php endif ?>
                        <?php if(!isset($_SESSION['usr-id'])) : ?>
                        <a class="dropdown-item" href="login.php">LOGIN</a>
                        <?php endif ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>



