<?php

require 'admin/config/database.php';
session_start();

if(isset($_POST['submit']))
{
   $fname=filter_var($_POST['fname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $lname=filter_var($_POST['lname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $username=filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
   $pass=filter_var($_POST['pass'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $confirm_pass=filter_var($_POST['confirm_pass'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

   $uppercase    = preg_match('@[A-Z]@', $pass);
   $lowercase    = preg_match('@[a-z]@', $pass);
   $number       = preg_match('@[0-9]@', $pass);
   $specialchars = preg_match('@[^\w]@', $pass);
   
    
   $isnumber       = preg_match('@[0-9]@', $fname);
   $is_specialchars = preg_match('@[^\w]@', $fname);

   $lname_number       = preg_match('@[0-9]@', $lname);
   $lname_specialchars = preg_match('@[^\w]@', $lname);


   if(!$fname){
    $_SESSION['signup'] = 'please enter the first name';
   }
   elseif($isnumber || $is_specialchars)
   {
    $_SESSION['signup'] = 'first name canot be numbers';
   }
   elseif($lname_number || $lname_specialchars)
   {
    $_SESSION['signup'] = 'last name canot be numbers';
   }
   elseif(!$lname){
    $_SESSION['signup'] = 'please enter the last name';
   }
   elseif(!$username){
    $_SESSION['signup'] = 'please enter the user name';
   }
   elseif(!$email){
    $_SESSION['signup'] = 'please enter a valid email';
   }
   elseif (!$uppercase || !$lowercase || !$number || !$specialchars )
   {
    $_SESSION['signup'] = 'password contain upercase lowercase number and special chars';
   }
   elseif(strlen($pass) < 8)
   {
    $_SESSION['signup'] = 'password contain minimum 8 letters ';
   }
   else
   {
         if($pass !== $confirm_pass)
        {
            $_SESSION['signup'] = 'passwords doesnot match';
        }
        else
        {
            $hashed_password=password_hash($pass,PASSWORD_DEFAULT);

                    $user_check_query = " SELECT * FROM users WHERE username ='$username' OR email='$email'";
                    $user_check_result=mysqli_query($connection,$user_check_query);
                    if(mysqli_num_rows($user_check_result)>0){

                        $_SESSION['signup'] = 'email or username is already exist';
                    }
                   
        }
   }

if(isset($_SESSION['signup']) )
{
    $_SESSION['signup-data'] =$_POST;
    header('location:signup.php' );
    die();
}
else
{
    $user_insert_query = "INSERT INTO users (firstname,lastname,username,email,password,is_admin) VALUES ('$fname','$lname','$username','$email','$hashed_password','0')" ;
    $insert_user_result = mysqli_query($connection,$user_insert_query);
            if(!mysqli_errno($connection))
            {
                $_SESSION['signup-success'] = "Registration success ";
                header('location:login.php' );
                die();
            }



}
 

}
else
{
    header('location:signup.php' );
    die();
}