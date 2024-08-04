<?php

require 'config/database.php';


if(isset($_POST['submit']))
{
   $fname=filter_var($_POST['fname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $lname=filter_var($_POST['lname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $username=filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
   $pass=filter_var($_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $confirm_pass=filter_var($_POST['c-password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $is_admin =filter_var($_POST['user-role'],FILTER_SANITIZE_NUMBER_INT);
   



   if(!$fname){
    $_SESSION['add-user'] = 'please enter the first name';
   }
   elseif(!$lname){
    $_SESSION['add-user'] = 'please enter the last name';
   }
   elseif(!$username){
    $_SESSION['add-user'] = 'please enter the user name';
   }
   elseif(!$email){
    $_SESSION['add-user'] = 'please enter a valid email';
   }
   else
   {
         if($pass !== $confirm_pass)
        {
            $_SESSION['add-user'] = 'passwords doesnot match';

        }
        else
        {
            $hashed_password=password_hash($pass,PASSWORD_DEFAULT);

                    $user_check_query = " SELECT * FROM users WHERE username ='$username' OR email='$email'";
                    $user_check_result=mysqli_query($connection,$user_check_query);
                    if(mysqli_num_rows($user_check_result)>0){

                        $_SESSION['add-user'] = 'email or username is already exist';
                    }
                   
        }
   }

if(isset($_SESSION['add-user']) )
{
    $_SESSION['add-user-data'] =$_POST;
    header('location:'. ROOT_URL .'/admin/add-user.php' );
    die();
}
else
{
    $user_insert_query = "INSERT INTO users (firstname,lastname,username,email,password,is_admin) VALUES ('$fname','$lname','$username','$email','$hashed_password','$is_admin')" ;
    $insert_user_result = mysqli_query($connection,$user_insert_query);
            if(!mysqli_errno($connection))
            {
                $_SESSION['add-user-success'] = "New user $fname $lname added successfully ";
                header('location:'. ROOT_URL .'admin/manage-users.php' );
                die();
            }



}
 

}
else
{
    header('location:'. ROOT_URL .'admin/add-users.php' );
    die();
}