<!DOCTYPE html>
<html>
<head>

    <title>add contestants</title>
    <?php include '../header.php';?>
    <link rel="stylesheet" type="text/css" href="../src/css/forms.css">
    <link rel="icon" href="../src/images/logo.jpeg" type="image/x-icon">
    <!-- style -->
    <style type="text/css">
    	body{
    		height: 100vh;
    	}
    	.f-container{
    		background-color: #3b2b31;
    		height: 100%;
    		padding-top: 4%;
    	}
    	.f-container>form{
    		background-color: #2B2024;
    		padding: 4% 5% 4% 5%;
    		border-radius: 20px;
    		box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.3);

    	}
    	.f-container>form>label{
    		color:white;
    	}
    	.banner{
    		height: auto;
    		background-color: #2B2024;
    		padding:2% 0 1% 0;
    	}
    	.display-2{
    		color: #FD0054;
    		font-weight: 600;
    		font-size: 3rem;
    		text-align: center;
    		margin: 0;
    	}	

    
		
    	
    </style>
</head>

<body>
<div class="banner">
	<h1 class="display-2">ADD CONTESTANTS</h1>
	<a href="../admin.php" class="button">Dashbord</a>
</div>
<div class="f-container">
	<!-- form -->
    <form action="../backend/addcontestants_be.php" method="post" class="form-all"  onsubmit="return validateForm()" >

        <label>Personal details:</label><br>
        <input type="text" name="name" id="name" placeholder="Enter  Name" oninput="checkFormValidity()"><br>
        <input type="text" name="email" id="email" placeholder="Enter  Email" oninput="checkFormValidity()"><br>
        <input type="text" name="phonenumber" id="phonenumber" placeholder="Enter a contact number" oninput="checkFormValidity()">
        <br>
        <br>
        

        <label>Password:</label><br>
        <input type="password" name="pw-1" id="pw-1" placeholder="Enter a password" oninput="checkFormValidity()"><br>
        <input type="password" name="pw-2" id="pw-2" placeholder="Re-enter a password" oninput="checkFormValidity()"><br><br>
        
        <input type="submit" name="submit" id="submitButton" disabled>

    </form>
</div>


   
   <script>
   			 //JavaScript part
   			
    		function validateForm() {

    			/*declair*/
   
        		var pw1 = document.getElementById('pw-1').value;
        		var pw2 = document.getElementById('pw-2').value;
        		

        		/*Checks whether the first password is identical to the next password*/
        		if (pw1 !== pw2) {
            		alert("Passwords do not match");
        		    		return false;
        		}


        		return true;
    		}


    		/**/
    		function checkFormValidity() {

        		var name = document.getElementById('name').value;
        		var email = document.getElementById('email').value;
        		var phoneNumber = document.getElementById('phonenumber').value;
        		var pw1 = document.getElementById('pw-1').value;
        		var pw2 = document.getElementById('pw-2').value;
        		var submitButton = document.getElementById('submitButton');

        		if (name !== "" && email !== "" && phoneNumber !== "" && pw1 !== "" && pw2 !== "") {
            		submitButton.disabled = false;
        		}

        		else {
            		submitButton.disabled = true;
        		}

    		}

	</script>


</body>



</html>
