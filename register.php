<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="register.css">


</head>

<?php


	include 'connection.php';

	error_reporting(0);
	if (isset($_POST['submit']))
	{
			$username = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['pass'];
			$repassword = $_POST['repass'];

				if ($repassword == $password)
				 {
					  $userdata = "SELECT * FROM users WHERE email = '$email' ";
						$user_connect = mysqli_query($connection , $userdata);

						if(mysqli_num_rows($user_connect ) > 0)
							{
								echo "<script>alert('Email already exist')</script>";

							}
						else
							{
								$userdata = "INSERT INTO users(username , email , password)
										VALUES('$username','$email' ,'$password')";
										$user_connect = mysqli_query($connection , $userdata);

										if($user_connect)
										{
											echo "<script>alert('Register Successful....Please Log in ...')</script>";
											header('Location:login.php');
										}
										else
										 {
												echo mysqli_error($connection);
											}
							}

				}
				else {
					echo "<script>alert('Password Do not match')</script>";
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
  			<h2>Register</h2>
  		</div>
  		<form action="" method="POST">
	  		<div class="name">
	  			<input type="text" name="name" placeholder="Username" required>
	  		</div>
	  		<div class="e-mail">
	  			<input type="email" name="email" placeholder="@gmail.com" required>
	  		</div>

	  		<div class="password">
	  			<input type="password" name="pass" placeholder="password" required>
	  		</div>
	  		<div class="re-password">
	  			<input type="password" name="repass" placeholder="Re-enter password" required>
	  		</div>
	  		<div class="condition">
	  			<input type="checkbox" required>I accept the <a href="terms">Terms of Use & Privacy Policy.</a>
	  		</div>

	  		,<!--<div class="gender">
					<select name="gender" >
  						<option value="male">Male</option>
  						<option value="female">Female</option>
  				</select>
	  		</div>-->
	  		<button class="button" name="submit">Register</button>
	  		<div class="already">
	  			<a href="login.php">Already have an account?</a>
	  		</div>




		</form>
  	</div>

  </section>
<script type="text/javascript" src="register.js" ></script>
</body>
</html>
