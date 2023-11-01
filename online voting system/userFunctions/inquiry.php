<!DOCTYPE html>
<html>
<head>
	<title>inquiry section</title>
		<link rel="stylesheet" type="text/css" href="../src/css/footer.css">

	 <link rel="icon" href="../src/images/logo.jpeg" type="image/x-icon">

	<?php
	include "../header.php";

		$funcResult = $_GET['result'];



	?>

	<style type="text/css">
		
body{
    background:linear-gradient(#FD0054,#2B2024);
    background-repeat: no-repeat ;
    
    height: 100vh;

}

form {
    width: 450px;
    padding: 20px 20px 15px 15px;
    margin: 50px auto;
    background-color: #FBF9FA;
    border-radius: 10px;
    box-shadow: 0 20px 35px rgba(0,0,0,0,1);
    font-family: sans-serif;
    font-size: 20px;
	font-family: Sans-serif; 
}



h1{
    font-size: 30px;
    color: #2B2024;
    margin-bottom: 20px;
    font-family: sans-serif;
    text-align: left;
}


button{
    font-size: 16px;
    margin: 5px 15px 5px 15px;
    border-radius: 20px;
    outline: none;
    border: none;
    width: 30%;
    background: #2B2024;
    color: #FBF9FA;
    padding: 10px;
    cursor: pointer;
    text-decoration: none;
    margin-left: 270px;
}

.btn1:hover{
    background: #FD0054;
}


form input,textarea{
    width: 100%;
    border: solid black;
    padding:12px 20px;
    margin-top: 5px;
    border-radius: 10px;
    background: #e4e4e4;
    font-size: 15px;
}


.inputField {
    border-radius:10px;
} 

.btn1{
	/*background-color: #FD0054; */
	width:150px; 
	margin-left:265px;
}

</style>
</head>


<body>

<ul class="ul"  >

      <li><a href="../user.php">HOME</a></li>
      <li><a href="../result.php">RESULTS</a></li>
      <li><a href="inquiry.php?result=h">INQUIRIES </a></li>
      <li><a href="seeNotices.php">NOTICE</a></li>
      <li><a href="vote.php?vresult=h">VOTE</a></li>
      
   </ul>
	<div>
		
		<form action="../backend/inquiryAddDb.php" method="post" onsubmit="return validateForm()" name="myForm">
		<?php

			if($funcResult=='y'){

			echo "<p class='notice'> Inquiry added successfully<p>";
			}


		?>
				<h1>
					Type Your Inquiry
				</h1>

			<label>User Name</label>
			<input type="text" name="name" placeholder="Your name">

			<label>Inquiry</label><br>
			<input type="text" name="inquiry" placeholder="Inquiry">
			<br>
			
			
			<input type="submit" name="" class="btn1" style="">
			

		</form> 
		<br>
		
		<br>
		<br><br>
	</div>
<!-- --------------------------------------footer---------------------------------------------------------------- -->

		<section class="footer" id="sect-5">

			<div class="footer-content">
				<img src="../src/images/logo.jpeg">
				<p>This is the official website of SLGT</p>

				
				
			</div>

			<div class="footer-content">
				<h4>Contact</h4>
				<li><a href="#">New Kandy Road,</a></li>
				<li><a href="#">Malabe</a></li>
				<li><a href="#">+94 1234 567</a></li>
				<li><a href="#">+94 9876 543</a></li>

			</div>

			<div class="footer-content">
				<h4>Menu</h4>
				<li><a href="#">Home</a></li>
				<li><a href="#">Vote</a></li>
				<li><a href="#">Best Performances</a></li>
				<li><a href="#">Contact Us</a></li>

			</div>

			<div class="footer-content">
				<h4>Site Information</h4>
				<li><a href="#">Terms & Conditions</a></li>
				<li><a href="#">Accessibility</a></li>
				<li><a href="#">Cookie Policy</a></li>
				<li><a href="#">Privacy Notices</a></li>

			</div>


			
		


			
		</section>
		<div class="icon-section">
			<div class="icons">
					<a href="#"><i class='bx bxl-facebook-square' ></i></a>
					<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
					<a href="#"><i class='bx bxl-tiktok' ></i></a>
					<a href="#"><i class='bx bxl-youtube' ></i></a>
					<a href="#"><i class='bx bxl-whatsapp-square'></i></a>
					
				</div>
		</div>


	<script>
    function validateForm() {
        var name = document.forms["myForm"]["name"].value;
        var inquiry = document.forms["myForm"]["inquiry"].value;

        if (name == "") {
            alert("Name must be filled out");
            return false;
        }

        if (inquiry == "") {
            alert("Inquiry must be filled out");
            return false;
        }

        return true;
    }
</script>





	




</body>
</html