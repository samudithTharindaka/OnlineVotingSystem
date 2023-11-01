<!DOCTYPE html>
<html>
<head>
		<?php
	include "../header.php";
	?>

	<title>see notices</title>
	<link rel="stylesheet" type="text/css" href="../src/css/footer.css">
	<link rel="stylesheet" type="text/css" href="../src/css/table.css">


<style>
	body{
     	background-color: #3b2b31;
    	background-repeat: no-repeat ;
    	height: 100vh;
	}
	.container-table{
		padding: 5% 10% 15% 10%;
	}
	
</style>
</head>
<body>
<!-- Navigation Bar -->
	<ul class="ul"  >

      <li><a href="../user.php">HOME</a></li>
      <li><a href="../result.php">RESULTS</a></li>
      <li><a href="inquiry.php?result=h">INQUIRIES </a></li>
      <li><a href="seeNotices.php">NOTICE</a></li>
      <li><a href="vote.php?vresult=h">VOTE</a></li>
      
   </ul>


	<div class="container-table">
			<table class="table-all">
			<tr>
				<th>NoticeId</th>
				<th>Notice</th>
				
			</tr>

			<!-- get notices -->
			<?php
			include '../backend/sqlConnect.php';

			$connOk = connectDB();		//connect to the database

			$sql="SELECT * from notice where visible = 'y';";

			$result1=$connOk->query($sql);		//execute query


			if ($result1->num_rows > 0) {
            	while ($row = $result1->fetch_assoc()) {		//display results in a table
                echo "<tr>";
                echo "<td>" . $row['notice_id'] . "</td>";
                echo "<td>" . $row["notice"] . "</td>";
                
                echo "</tr>";
            	}
        	} 
        	else {
            	echo "<tr><td colspan='2'>No Notices available</td></tr>";
       		}

			?>

		</table>

	</div>

<!-- Footer -->
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