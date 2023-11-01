<!DOCTYPE html>
<html>
<head>
	<title>login or sign up</title>
	<?php include 'header.php';?>

	<link rel="icon" href="src/images/logo.jpeg" type="image/x-icon">
	<style type="text/css">
		body{
			background-color: #030D18;
			padding-right: 30%;
			padding-left: 30%;


		}
		.bg-1{

			
			
			height: 60vh;
			padding-top: 10%;
			margin-top: 15%;
			width: auto;
			border-radius: 10%;
			text-align: center;
			padding-top: 20%;
			background: linear-gradient(to top, #49363d, #2B2024);			

		}
		.bg>h1{
			color:white;
		}

	</style>
</head>
<body>

	
		<div class="bg-1">
			<h1 style="color: white;">Do u already has an account?</h1>
			<a href="user.php" class="btn btn-primary">login in</a>
			<a href="admin.php" class="btn btn-primary">sign up</a>


		</div>
	

</body>
</html>