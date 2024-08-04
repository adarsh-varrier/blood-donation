<?php 

require 'config/database.php';

if(isset($_GET['id']))
{
    
    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

    $query = "SELECT * FROM doners WHERE id=$id";
    $result = mysqli_query($connection,$query);
    $user = mysqli_fetch_assoc($result);
    $name =$user['firstname'];


   

    $dlt_usr_query ="DELETE  FROM doners WHERE id = $id";
   $res = mysqli_query($connection,$dlt_usr_query);
    if(mysqli_errno($connection))
    {
        $_SESSION['doner-dlt'] ="couldn't delete that user";

    }
    else{
        $_SESSION['doner-dlt-success'] = "$name is delete successfully";
       
    }
    
}
header('location:index.php' );