<!DOCTYPE html>
<html>
<head>
	<title>vote page</title>
	<?php 

		//handle session
		session_start();
		$pid=$_SESSION['user_id'];

		//include common files
		include 'header.php';
		include 'backend/sqlConnect.php';

		$connOk = connectDb();//db connection

		//sql
		$sql ="SELECT * FROM contestant;";
		$sqlCheckTotalVotes = "SELECT SUM(votes) from contestant;";

		//execute
		$result=$connOk->query($sql);
		$result1=$connOk->query($sqlCheckTotalVotes);// getting total votes

		//fetching results
		$totalVotesGot =$result1->fetch_assoc();
		$totalVotes=$totalVotesGot['SUM(votes)'];
		
	 ?>


	 <!-- link js -->
	 <script type="text/javascript" src="src/js/result.js"></script>
   
   <link rel="icon" href="src/images/logo.jpeg" type="image/x-icon">

	<style>
        .graph-container {
            width: 70%;
            margin: 20px auto;
            height: 70vh;
            background-color: #2B2024;
            border-radius: 15px;
            padding: 10% 8% 0 8%;
            box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.3);
           

        }

        .bar {
            display: inline-block;
            width: 40px;
            margin-right: 25px;
            background-color: #FD0054;
            /*text-align: center;*/
            color: white;
            position: relative;
           	vertical-align: bottom;

        }

        .bar-label {
            margin-top: -60%;
            margin-left: -55%;
            position: absolute;
        }

        .bg-vote{
        	 background-color:#584149;
        }





    </style>


</head>
	
<body class="bg-vote">


<!-- nav -->
	<ul class="ul">
      <li><a href="user.php">HOME</a></li>
      <li><a href="#">RESULTS</a></li>
      <li><a href="userFunctions/inquiry.php?result=h">INQUIRIES </a></li>
      <li><a href="userFunctions/seeNotices.php">NOTICE</a></li>
      <li><a href="userFunctions/vote.php?vresult=h">VOTE</a></li>
      
    </ul>

<!-- end nav -->

<!-- graph details -->
 		<div class="graph-container">
 			<center style="height: 100%;position: relative;padding-bottom: 0;">


		  		<?php
        			// Fetch and display data in the graph
        			if ($result->num_rows > 0) 
        			{
           				while ($row = $result->fetch_assoc()) {
            				$number=(($row['votes']/$totalVotes)*100);
            				$formattedNumber = number_format($number, 2);

            				echo "<div class='bar' style='height:" . (($row['votes'] / $totalVotes) * 100) . "%;'><img src='src/images/proPic/user.png' class='graphImage hover-container clickable-button' onclick='clicked(this," . $row['Contestant_Id'] . ",\"" . $row['Name'] . "\"," . $row['votes'] . ")'><span class='bar-label'>" . $formattedNumber . "%</span><span class='contestantName'>" . $row['Contestant_Id'] . "</span></div>";

            				

            			}
        			} 
        			else 
        			{
           			
           			 echo "No data available";
        			}
        		?>



       		
       		
   			</center>
   		</div>

   		<div class="contestant-Details" style="" id="datHidden">
   			<p class="lead" id="name">Name :</p>
   			<p class="lead" id="idnum">Name :</p>
   			<p class="lead" id="votes">Name :</p>
   			<a href="" class="btn btn-primary votingBtn" id="voteBtnNum">vote</a>

   		</div>

<!-- end graph -->

   		<!-- --------------------------------------footer---------------------------------------------------------------- -->

		<section class="footer">

			<div class="footer-content">
				<img src="src/images/logo.jpeg">
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
		<div class="icon-section" style="">
			<div class="icons">
					<a href="#"><i class='bx bxl-facebook-square' ></i></a>
					<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
					<a href="#"><i class='bx bxl-tiktok' ></i></a>
					<a href="#"><i class='bx bxl-youtube' ></i></a>
					<a href="#"><i class='bx bxl-whatsapp-square'></i></a>
					
				</div>
		</div>





			<!-- --------------------------------js---------------------------- -->
<script type="text/javascript">
				

	 function clicked(element, id, name, votes) {
            
 // Setting the clicked effect on images
        var divAppear = document.getElementById('datHidden');
        var nameElement = document.getElementById('name');
        var ageElement = document.getElementById('idnum');
        var numElement = document.getElementById('votes');
        var btn = document.getElementById('voteBtnNum');

        var buttons = document.getElementsByClassName('clickable-button');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove('clicked');
            divAppear.style.display = "none";
        }
        element.classList.add('clicked');
        divAppear.style.display = "block";

        // Update the details in the hidden div
        nameElement.innerHTML =  name;
        ageElement.innerHTML =  id;
        numElement.innerHTML = "Votes:" + votes;
        btn.innerHTML="Vote for "+ id;
        btn.href="userFunctions/vote.php?vresult=h";



        // Set a timeout
        	setTimeout(function() {
            	divAppear.style.display = "none";
        	}, 5000);
        }



	</script>



</body>
</html>