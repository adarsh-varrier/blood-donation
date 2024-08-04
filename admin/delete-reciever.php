<?php 

require 'config/database.php';

if(isset($_GET['id']))
{
    
    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

    $query = "SELECT * FROM reciever WHERE id=$id";
    $result = mysqli_query($connection,$query);
    $user = mysqli_fetch_assoc($result);
    $name =$user['firstname'];


   

    $dlt_usr_query ="DELETE  FROM reciever WHERE id = $id";
   $res = mysqli_query($connection,$dlt_usr_query);
    if(mysqli_errno($connection))
    {
        $_SESSION['reciever-dlt'] ="couldn't delete that user";

    }
    else{
        $_SESSION['reciever-dlt-success'] = "$name is delete successfully";
       
    }
    
}
header('location:index.php' );