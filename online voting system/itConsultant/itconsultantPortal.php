<!DOCTYPE html>
<html>
<head>
	<title>it consultant</title>

	<?php   include '../header.php';  ?>
<link rel="stylesheet" type="text/css" href=" ../src/css/footer.css">
<link rel="icon" href="../src/images/logo.jpeg" type="image/x-icon">


<style>

body,html{
	overflow-x: hidden;
}


body{
	background:linear-gradient(#FD0054,#2B2024);
	margin: none;
	padding: none;
	height: 100vh;

}

	table {
    width: 100%;
    border-collapse: collapse ;
    margin-bottom: 100px;
	
}

th, td {
    border: 3px solid black;
    padding: 8px;
    text-align: left;
	background-color: #f2f2f2;
}

th {
    background-color: #d9d9d9;
	text-align: center;
}

tr,img{
	width:25px;
	
}

.btn1{
    font-size: 10px;
  	border-radius: 10px;
    outline: none;
    border: solid black;
    background: #2B2024;
    color: #FBF9FA;
    padding: 8px 16px 8px 16px;
    cursor: pointer;
    text-decoration: none;
    margin-left: 90px;
	margin: 0 auto; /* Center the button horizontally */
    
}

.btn1:hover{
    background: #FD0054;
}


.container1{
	padding-left: 9%;
	padding-right: 9%;
}

.banner1{
	height: 40vh;
	background-color: #2B2024;
	padding-top: 5%;
}
.lead{
	font-size: 4rem;
	text-align: center;

}
.col-4{
	background-color: transparent;
}


.myname{
	color:white;
	font-size:20px;
	text-align:center;

}





</style>

<?php
	
	include '../backend/sqlConnect.php';
	
	$sql="SELECT * FROM inquiry where isRead='no';";
	$connOK = connectDB();

	$result = $connOK->query($sql);



?>



</head>
<body>

<div class="banner1 row" >
	<div class="col-4 row">
			<div class="row">
				<div class="col-8"></div>
				<div class="col-4"><img src="../src/images/proPic/user.png" class='proPic' style="margin-left: 30%;"> </div>
			</div>
	</div>

	<div class="col-4">
		<h1 class="lead">IT Consultant</h1>
		<h6 class="myname"> Dilnuk De Silva</h6><br>
		<center><a href="../index.php" class="btn1">logout</a></center>
	</div>

	<div class="col-4">
		
	</div>

	
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<div class="container1">








	<table >
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Inquiry</th>
				<th>UserId</th>
				<th colspan="2">Option</th>
				

			</tr>

			<?php 

		if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['inquiryId'] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["inquiry"] . "</td>";
                echo "<td>" . $row["sendBy"] . "</td>";
                echo "<td><center> <a href='../backend/markAsread.php?id=".$row['inquiryId'] ." 'class='btn1'>mark as readed </a></center></td>";
                echo "<td><center> <a href='../backend/deleteInquiry_be.php?id=".$row['inquiryId'] ."'class='btn1'>delete </a></center></td>";
              
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No data available</td></tr>";
        }

			?>


			
		</table>
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


	




</body>
</html>