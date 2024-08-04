<?php

require 'config/database.php';


if(isset($_POST['submit']))
{
   $fname=filter_var($_POST['fname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $lname=filter_var($_POST['lname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
   $phone=filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
   $date=$_POST['date'];
   $time=$_POST['time'];
   $blood_grp=$_POST['blood-grp'];
   $place=filter_var($_POST['place'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $userid=$_SESSION['usr-id'];

   if(!$fname){
    $_SESSION['add-reciever'] = 'please enter the first name';
   }
   elseif(!$lname){
    $_SESSION['add-reciever'] = 'please enter the last name';
   }
   elseif(!$email){
    $_SESSION['add-reciever'] = 'please enter a valid email';
   }
   elseif(!$phone){
    $_SESSION['add-reciever'] = 'please enter a valid phone number';
   }
   elseif(strlen($phone) < 10)
   {
    $_SESSION['signup'] = 'phone number is less than 10 numbers ';
   }
   elseif(strlen($phone) > 10)
   {
    $_SESSION['signup'] = 'phone number is greater than 10 numbers ';
   }
   elseif(!$date){
    $_SESSION['add-reciever'] = 'please make sure the date ';
   }
   elseif(!$time){
    $_SESSION['add-reciever'] = 'please make sure the time';
   }
   elseif(!$blood_grp){
    $_SESSION['add-reciever'] = 'please enter e blood group';
   }
   elseif(!$place)
   {
    $_SESSION['add-reciever'] = 'please enter a place';
   }
   if(isset($_SESSION['add-reciever']) )
{
    $_SESSION['add-reciever-data'] =$_POST;
    header('location:add-reciever.php' );
    die();
}
else
{
   
    $add_reciever_query = "INSERT INTO reciever (first_name,last_name,email,phone,date,time,blood_grp,place,user_id) VALUES ('$fname','$lname','$email','$phone','$date','$time','$blood_grp','$place','$userid')" ;
    $insert_user_result = mysqli_query($connection,$add_reciever_query);
            if(!mysqli_errno($connection))
            {
                $_SESSION['add-reciever-success'] = "Add recieverr success ";
                header('location:index.php' );
                die();
            }

}


}