<?php
 
 require 'admin/config/database.php';


 ?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Singn UP</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="css/style-login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Let's Make All Bonded</h1>
		<p>A single drop of blood can make a huge difference</p>
		
		</div>
	</div>
	
	
		<div class="right">
		<h5>SignUp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
		<?php if(isset($_SESSION['signup'])) :  ?>
                <p style="color: red; text-align:center">
                <?= $_SESSION['signup']  ;
                unset($_SESSION['signup']); ?>
                 </p>
            <?php endif ?>
        <p>Already  have an account? <a href="login.php">Login to  Your Account</a> </p>
		
        <form action="signup-logic.php" method="POST" enctype="multipart/form-data">
		<div class="input">
            <input  name="fname" type="text" placeholder="First Name">
			<br>
			<input name="lname" type="text" placeholder="Last Name">
			<br>
			<input name="username" type="text" placeholder="user name">
			<br>
            <input name="email" type="email" placeholder="email">
			<br>
			
			<input name="pass" type="password" placeholder="password">
            <br>
            <input name="confirm_pass" type="password" placeholder="confirm password">
		</div>
			<br>
			<button name="submit">signup</button>
	</div>
</form>
	
</div>
<!-- partial -->
  
</body>
</html>
