<!DOCTYPE html>
<html>
<head>
		<?php
		include "../header.php";

	?>
	<title>judge</title>
	<link rel="stylesheet" type="text/css" href="../src/css/table.css">
	<link rel="stylesheet" type="text/css" href="../src/css/forms.css">
	<link rel="stylesheet" type="text/css" href="../src/css/footer.css">
	<link rel="icon" href="../src/images/logo.jpeg" type="image/x-icon"> 





	<style type="text/css">
		body{

			background-color: #3b2b31;

		}
		.banner{
			background-color: #FD0054;
		}
		.row>div{
			background-color: transparent;
		}
	
		.display-2{
			font-weight: 600;
			font-size: 4rem;
		}
		.container{
			padding-left: 5%;
			padding-right: 5%;
		}
		.container-1{
			height: auto;
			border-radius: 20px;
			box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.3);
			background-color: #2B2024;
		}
		.logoutBtn{
			background-color: #A80038;
		}
	



	</style>
</head>
<body>

	<div class="banner row">
		<div class="col-3">
			<div><img src="../src/images/proPic/user.png" class="proPic"></div>
			
		</div>
		<div class="col-9">
			<h1 class="display-2 padding"> JUDGE PORTAL</h1>
			<a href="../index.php" class="button" style="margin:1% 0 0 20%;background-color: #2B2024">Logout</a>
		</div>

		
		
	</div>
<div class="container">
	<br>
	<br>
	<div class="container-1">
	<?php  
			$data= $_GET['data'];

			if($data=="add"){
				echo "<p class='notice'>Notice Added Successfully!</p>" ;

			}
			elseif($data=='updated'){
				echo "<p class='notice'>Notice Deleted Successfully!</p>" ;
			}	
					
			elseif($data=='edited'){
				echo "<p class='notice'>Notice Edited Successfully!</p>" ;
			}
			// worse cases
			elseif($data=='addf' || $data=='updatef'|| $data=='edditf' ){
				echo "<p class='notice'>Something Went Wrong!</p>" ;
			}			

	?>

	<!-- enter data -->
	<div>
			<form action="../backend/handlejudge_be.php" method="post" class="form-all">
				<textarea name="notice" placeholder="Publish a Notice"></textarea>
				<input type="submit" name="noticeSub" value="Publish">
			</form>
			<br>
			<br>


	</div>
</div>

	<br>
	<br>
	<!-- notices -->
	<div class="container-1">
		<table class="table-all">
			<tr>
				<th>noticeId</th>
				<th>notice</th>
				<th colspan="2">options</th>
			</tr>

			<!-- get notices -->
			<?php
			include '../backend/sqlConnect.php';

			$connOk = connectDB();		//connecting to the database

			$sql="SELECT * from notice where visible = 'y';";

			$result1=$connOk->query($sql);		//execute query and set it to a variable

			//Display Result in a Table
			if ($result1->num_rows > 0) {
            	while ($row = $result1->fetch_assoc()) {		//get the data in the variable row by row and display in a table
                echo "<tr>";
                echo "<td>" . $row['notice_id'] . "</td>";
                echo "<td>" . $row["notice"] . "</td>";
                echo "<td> <a href='editNotice.php?id=".$row['notice_id'] ."' class='btn editBtn'>Edit</a></td>";
                echo "<td> <a href='../backend/deletNotice_be.php?id=".$row['notice_id'] ."' class='deletBtn btn'>Delete </a></td>";
              
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data available</td></tr>";
        }

			?>

		</table>
		

	</div>
</div>
<br>
<br>
<br>
<!-- --------------------------------------footer---------------------------------------------------------------- -->
<div>
		<section class="footer" style="width: 100%;">

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
		<div class="icon-section" >
			<div class="icons">
					<a href="#"><i class='bx bxl-facebook-square' ></i></a>
					<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
					<a href="#"><i class='bx bxl-tiktok' ></i></a>
					<a href="#"><i class='bx bxl-youtube' ></i></a>
					<a href="#"><i class='bx bxl-whatsapp-square'></i></a>
					
				</div>
		</div>
</div>
</body>
</html>