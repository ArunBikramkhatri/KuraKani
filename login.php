<!DOCTYPE html>
<html>
<head>
	<title>Login Kurakani </title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<?php

  include 'connection.php';

  error_reporting(0);
  if (isset($_POST['submit']))
   {
     $email = $_POST['email'];
     $password = $_POST['password'];

     $data = "SELECT * FROM users WHERE email = '$email' AND password='$password' ";
     $user_data = mysqli_query($connection , $data);

     if($user_data->num_rows > 0)
     {
       header("Location:chat.html");

     }

     else {
       echo "<script>alert('Username or Password donot match')</script>";
     }


  }

 ?>

<body>
  <section>
  	<div class="heading">
  		<h1>KuraKani</h1>
  	</div>
  	<img src="chat.jpg" class="chatimage">
  	<div class="form">

  		<div class="login-heading">
  			<h2>Log-In</h2>
  		</div>
  		<form method="POST" id="form">
 			<span id = invalid>Invalid Username or Password</span>

	  		<div class="name">
	  			<input type="text" name="email" placeholder="@ email" required>
	  		</div>

	  		<div class="password">
	  			<input type="password" name="password" placeholder="********" required>
	  		</div>
	  		<div id="remember">
	  			<input type="checkbox"> Remember Me
	  		</div>
	  		<!--<div class="sign">
	  			<input type="submit" value="Sign In">

	  		</div> -->
			<div>
				<a class="next_page" href="#">
	  			<button class="button" name="submit">Sign In</button></a>
	  		</div>

	  		<div class="new">
	  			<a href="register.php">Create new account?</a>
	  		</div>
	  		<div class="forgot">
	  			<a href="password.php">Forgot password?</a>
	  		</div>



		</form>

  	</div>

  </section>


 <script type="text/javascript" src="login.js"></script>

</body>
</html>
