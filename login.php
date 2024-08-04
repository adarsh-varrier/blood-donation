<?php
 
 require 'admin/config/database.php';

 ?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
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
		<h5>Login</h5>
		<?php if(isset($_SESSION['login'])) :  ?>
                <p style="color: red; text-align:center">
                <?= $_SESSION['login']  ;
                unset($_SESSION['login']); ?>
                 </p>
            <?php endif ?>
		<p>Don't have an account? <a href="signup.php">Creat Your Account</a> it takes less than a minute</p>
		<form action="login-logic.php" method="POST">
		<div class="inputs">
			<input name="username" type="text" placeholder="user name">
			<br>
			<input name="password"  type="password" placeholder="password">
		</div>
			
			<br>
			<br>
			<button name="submit">Login</button>
	</div>
	</form>
	
</div>
<!-- partial -->
  
</body>
</html>
