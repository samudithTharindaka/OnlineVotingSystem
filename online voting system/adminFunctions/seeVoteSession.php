<!DOCTYPE html>
<html>
<head>
	<title>Contestant Details</title>
	<?php
	//connect external files
	 include '../header.php';
	 include '../backend/sqlConnect.php';


	 $conn = connectDB();

	 //get the contestants
	 $sql = "SELECT * FROM sessionDat ;";
	 $result = $conn->query($sql);

	?>
	<link rel="stylesheet" type="text/css" href="../src/css/table.css">
	<link rel="stylesheet" type="text/css" href="../src/css/footer.css">
	<link rel="icon" href="../src/images/logo.jpeg" type="image/x-icon">

	<!-- ------------------------------------------------------------------------------------------ -->
	<style type="text/css">
		.btn-primary{
			border:none;
		}
		.bg{

			background-color: #3b2b31;
			height: auto;
			padding-bottom: 10%;
			padding-top: 4%;
			padding-left: 12%;
			padding-right: 12%;
		}
		.bg>h2{
			font-size: 3rem;
			font-weight: 600;
			color: white;
			text-align: center;

		}
		table{
			margin-top: 3%;
			margin-bottom: 30vh;
		}
		th{
			
		}
		.btn-dash{
			background-color: #FD0054;
			margin-left: 45%;
		}
		.btn-dash:hover{
			background-color: #A80038;
			transition: 0.3s;
			transform: scale(0.8);
		}
	</style>
	<!-- ---------------------------------------------------------------------------------------------------- -->

</head>
<body>		
	
<div class="bg">
	<!-- banner section -->
	<h2 class="display-2"> Vote Session History</h2>
	<a href="../admin.php" class="btn btn-primary btn-dash">Dashbord</a>
	<!-- banner section ends -->

	<!-- table section-->
	<table class="table-all">
		
		<tr>
			<th>Session Id</th>
			<th>Session Name</th>
			<th>total votes got</th>
			<th>Winner name</th>
			<th> </th>
		</tr>

		<!-- data show rows -->
		<?php
        // Fetch and display data in the table
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["sessionId"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["votes"] . "</td>";
                $wid =$row["winner"];
                //fetching the winners name and dispay
                $sql3 = "SELECT Name FROM contestant WHERE Contestant_Id='$wid';";
				$result3 = $conn->query($sql3);
				$winner = $result3->fetch_assoc();

				//if there is no winner
				if($winner){
    				$winnerName = $winner['Name'];
   					echo "<td>" . $winnerName . "</td>";
				} else {
    					echo "<td> No Winner </td>";
				}


                
                echo "<td><a href='../backend/deleteSession_be.php?id=".$row["sessionId"]."'class='btn btn-primary' style ='background-color:#FD0054;'>delete</a></td>";
            
      
                
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data available</td></tr>";
        }
        ?>

        <!-- data show row ends -->
	</table>
	<!-- table section ends -->

</div>
<!-- --------------------------------------footer---------------------------------------------------------------- -->

		<section class="footer" id="sect-5">

			<div class="footer-content">
				<img src="logo.png">
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