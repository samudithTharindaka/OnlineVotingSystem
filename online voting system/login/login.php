<html>
<head>
<link rel = "stylesheet" href="../src/css/loginSignup.css">
<link rel="icon" href="../src/images/logo.jpeg" type="image/x-icon">


<!-- <script src="../src/jss/scriptlogin.js"></script> -->
</head>
<body>

	<div class="form">

		<?php

			$failed= $_GET['failed'];

			if($failed=="yes"){
				echo "<p>Login Failed!</p>" ;		

			}
	
		?>
		<!-- Login Form -->
		<h1>Login</h1>
		<form action='../backend/login_be.php' method="post" name="myForm" onsubmit="validateForm()">
			<input type="text" class="inputfield" placeholder="User Name or Email" name='email'><br/><br/>
		
			<input type="password" class="inputfield" placeholder="Password" name='pw' >
			<center><input type="submit" class="signup" value="Login">
		</form>
	
			
			<h5>OR</h5>
			
			
		<hr>
	
		
		<div class="member">
		Not a Member? <a href="../userFunctions/signup.html">Register Now</a></label>
		</div>
	</div>
<script>
    function validateForm() {									//Validate Function
        var email = document.forms["myForm"]["email"].value;
        var password = document.forms["myForm"]["pw"].value;

        if (email === "") {
            alert("Email must be filled out");           
            return false;
        }

        if (password === "") {
            alert("Password must be filled out");
            return false;
        }

        return true;
    }
</script>
</body>
</html>