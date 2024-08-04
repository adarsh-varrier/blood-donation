<?php

require 'admin/config/database.php';
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
    <link rel="shortcut icon" type="image/png" href="blood.ico" />
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style-min.css">
    <title>Hemacare</title>
</head>

<body>

    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark danger-color">
        <a class="navbar-brand" href="index.php"><h3>Hemacare</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                
                    
               
                 <li class="nav-item">
                    <a class="nav-link" href="reciever.php">Receiver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="doners.php">Doners</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="https://twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="https://accounts.google.com/signin/v2/challenge/pwd?rart=ANgoxcdbbNxH1nYXChBQ7n_DhSet9sRm1XXzUFTdrodQQJThJv3oPCktvjFuZq-YDK8WsXHW_gXYeU7G-XB1iBPG0qMJAeBgcA&TL=ADFpJfOb9s-7gaEcskePTWW7zYes4DxVunw7mbUMQBZSeK5EHCUEOdP5ovEm1BiX&flowName=GlifWebSignIn&cid=1&flowEntry=ServiceLogin">
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
                        
                        <a class="dropdown-item" href="admin/">dashboard</a>
                        <a class="dropdown-item" href="./logout.php">logout</a>
                        <?php endif ?>
                        <?php if(!isset($_SESSION['usr-id'])) : ?>
                        <a class="dropdown-item" href="login.php">LOGIN</a>
                        <?php endif ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>