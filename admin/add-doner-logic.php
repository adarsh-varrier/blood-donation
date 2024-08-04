<?php

require 'config/database.php';


if(isset($_POST['submit']))
{
    $phone = 0;
   $fname=filter_var($_POST['fname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $lname=filter_var($_POST['lname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
   $phone=$_POST['phone'] ;
   $date=$_POST['date'];
   $time=$_POST['time'];
   $blood_grp=$_POST['blood-grp'];
   $place=filter_var($_POST['place'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $userid=$_SESSION['usr-id'];

     
   $isnumber       = preg_match('@[0-9]@', $fname);
   $is_specialchars = preg_match('@[^\w]@', $fname);

   $lname_number       = preg_match('@[0-9]@', $lname);
   $lname_specialchars = preg_match('@[^\w]@', $lname);

   $contact_uppercase    = preg_match('@[A-Z]@', $phone);
   $conact_lowercase    = preg_match('@[a-z]@', $phone);
   $contact_specialchars = preg_match('@[^\w]@', $phone);

   $place_number       = preg_match('@[0-9]@', $place);
   $place_specialchars = preg_match('@[^\w]@', $place);

   if(!$fname){
    $_SESSION['add-doner'] = 'please enter the first name';
   }
   elseif($isnumber || $is_specialchars)
   {
    $_SESSION['add-doner'] = 'first name canot be numbers';
   }
   elseif(!$lname){
    $_SESSION['add-doner'] = 'please enter the last name';
   }
   elseif($lname_number || $lname_specialchars)
   {
    $_SESSION['add-doner'] = 'last name canot be numbers';
   }
   elseif(!$email){
    $_SESSION['add-doner'] = 'please enter a valid email';
   }
   elseif(!$phone){
    $_SESSION['add-doner'] = 'please enter a valid phone number';
   }
   elseif(strlen($phone) > 10){
    $_SESSION['add-doner'] = ' phone number is greater than 10 digits';
   }
   elseif(strlen($phone) < 10){
    $_SESSION['add-doner'] = ' phone number is less than 10 digits';
   }
   elseif($conact_lowercase || $contact_uppercase || $contact_specialchars)
   {
    $_SESSION['add-doner'] = 'phone number must be in numbers';
   }
   elseif(!$date){
    $_SESSION['add-doner'] = 'please make sure the date ';
   }
   elseif(!$time){
    $_SESSION['add-doner'] = 'please make sure the time';
   }
   elseif(!$blood_grp){
    $_SESSION['add-doner'] = 'please enter e blood group';
   }
   elseif(!$place)
   {
    $_SESSION['add-doner'] = 'please enter a place';
   }
   elseif($place_number || $place_specialchars)
   {
    $_SESSION['add-doner'] = 'place  canot be numbers or special chars';
   }
   if(isset($_SESSION['add-doner']) )
{
    $_SESSION['add-doner-data'] =$_POST;
    header('location:add-doners.php' );
    die();
}
else
{
   
    $add_doner_query = "INSERT INTO doners (first_name,last_name,email,phone,date,time,blood_grp,place,user_id) VALUES ('$fname','$lname','$email','$phone','$date','$time','$blood_grp','$place','$userid')" ;
    $insert_user_result = mysqli_query($connection,$add_doner_query);
            if(!mysqli_errno($connection))
            {
                $_SESSION['add-doner-success'] = "Add doner success ";
                header('location:index.php');
                
                die();
            }

}


}

