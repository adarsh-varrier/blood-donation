<?php
 
 require 'admin/config/database.php';
 session_start();

 if(isset($_POST['submit']))
 {
       $username= filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
       $password = filter_var($_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

       if(!$username){
        $_SESSION['login'] = 'the username  must to be needed';
       }
       elseif(!$password){
        $_SESSION['login'] ='please provide a password';
       }
       else{
          
         $fetch_user = "SELECT *FROM users WHERE  username='$username' ";
         $fetch_user_result = mysqli_query($connection,$fetch_user);

              if(mysqli_num_rows($fetch_user_result) == 1){

                 $user_record = mysqli_fetch_assoc($fetch_user_result);
                 $db_password = $user_record['password'];

                 if(password_verify($password,$db_password)) 
                 {
                    $_SESSION['usr-id'] = $user_record['id'];
                    if($user_record['is_admin'] == 1){
                        $_SESSION['is_admin'] = true;
                    }

                    header('location:admin/' );
                 }
                 else{
                    $_SESSION['login'] ="Passwords doesnot match";
                  }
              }
              else{
                $_SESSION['login'] ="User not found";
              }

       }

       if(isset($_SESSION['login'])){
        $_SESSION['signin-data'] =$_POST;
        header('location:login.php' );
        die();

       }
 }
 else{
    header('location:login.php' );
    die();

 }