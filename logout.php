<?php 
require 'admin/config/constants.php';
session_destroy();
unset($_SESSION['usr-id']);
header('location:'.ROOT_URL);
die();