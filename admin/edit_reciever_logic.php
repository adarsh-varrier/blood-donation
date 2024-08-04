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
   $id=$_POST['id'];

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
    $_SESSION['edit-reciever'] = 'please enter the first name';
   }
   elseif($isnumber || $is_specialchars)
   {
    $_SESSION['edit-reciever'] = 'first name canot be numbers';
   }
   elseif(!$lname){
    $_SESSION['edit-reciever'] = 'please enter the last name';
   }
   elseif($lname_number || $lname_specialchars)
   {
    $_SESSION['edit-reciever'] = 'last name canot be numbers';
   }
   elseif(!$email){
    $_SESSION['edit-reciever'] = 'please enter a valid email';
   }
   elseif(!$phone){
    $_SESSION['edit-reciever'] = 'please enter a valid phone number';
   }
   elseif(strlen($phone) > 10){
    $_SESSION['edit-reciever'] = ' phone number is greater than 10 digits';
   }
   elseif(strlen($phone) < 10){
    $_SESSION['edit-reciever'] = ' phone number is less than 10 digits';
   }
   elseif($conact_lowercase || $contact_uppercase || $contact_specialchars)
   {
    $_SESSION['edit-reciever'] = 'phone number must be in numbers';
   }
   elseif(!$date){
    $_SESSION['edit-reciever'] = 'please make sure the date ';
   }
   elseif(!$time){
    $_SESSION['edit-reciever'] = 'please make sure the time';
   }
   elseif(!$blood_grp){
    $_SESSION['edit-reciever'] = 'please enter e blood group';
   }
   elseif(!$place)
   {
    $_SESSION['edit-reciever'] = 'please enter a place';
   }
   elseif($place_number || $place_specialchars)
   {
    $_SESSION['edit-reciever'] = 'place  canot be numbers or special chars';
   }
   if(isset($_SESSION['edit-reciever']) )
{
    $_SESSION['edit-reciever-data'] =$_POST;
    header('location:edit-reciever.php' );
    die();
}
else
{
   
    $update_reciever_query = "UPDATE reciever SET first_name='$fname' ,last_name='$lname' ,email='$email'  ,phone='$phone' ,date='$date'  ,time='$time'  ,blood_grp='$blood_grp'  ,place='$place'  ,user_id='$userid' WHERE id='$id' LIMIT 1";
    $insert_user_result = mysqli_query($connection,$update_reciever_query);
            if(!mysqli_errno($connection))
            {
                $_SESSION['edit-reciever-success'] = "edit doner success ";
                header('location:index.php' );
                die();
            }

}


}