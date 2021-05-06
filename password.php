<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="password.css">
</head>

<?php
	include 'connection.php';

	if (isset($_POST['submit']))
	 {
			$email = $_POST['email'];

			$data = "SELECT * FROM users WHERE email = '$email' ";
      $user_data = mysqli_query($connection , $data);

		  $password = mysqli_fetch_array($user_data);
			if($password)
			{
				echo "Your Password is  " . $password['password'];
			}
			else {
				echo "Incorrec email..";
			}
	}

 ?>
<body>
		<section>
			<div class="forget">
				<h2>Enter your email?</h2>
				<div class="box">
					<form action="" method="POST">
						<input type="text" name="email" id="email">
						<button name="submit">Submit</button>
						</form
				</div>
			</div>

		</section>
</body>
</html>
