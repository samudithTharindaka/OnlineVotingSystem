<!DOCTYPE html>
<html>
<head>
	<title>admin|panel</title>
	<!-- include external files -->
	<?php include 'header.php';?>

	<link rel="icon" href="src/images/logo.jpeg" type="image/x-icon">

	<style type="text/css">
		.button{
			margin: 0;
		}
	</style>

	<?php

		include 'backend/sqlConnect.php';

		$connOk = connectDB(); // db connection

		// SQL
		$sqlNumOfContestants = "SELECT COUNT(*) AS totalContestants FROM contestant;";
		$sqlNumOfusers = "SELECT COUNT(*) AS totalUsers FROM registered_user;";

		// counting contestants number
		$result1 = $connOk->query($sqlNumOfContestants); // getting total count of contestants

		// fetching results
		$totalCountsGot = $result1->fetch_assoc();
		$allCon = $totalCountsGot['totalContestants'];

		// counting user number
		$result2 = $connOk->query($sqlNumOfusers); // getting total count of users

		// fetching results
		$totalUserssGot = $result2->fetch_assoc();
		$allUsers = $totalUserssGot['totalUsers'];


		//fetching vote session status
		//sql
		$sql2 ="SELECT * FROM session;";

		//execute
		$result2=$connOk->query($sql2);

		//fetching results
		$sStatus =$result2->fetch_assoc();
		$status=$sStatus['status'];
		

	?>


</head>
<body>

	<!-- main section 1-->
	<div class="row admin-bg" style="padding-left: 0;width: 100%;">

		<!-- first column from left -->
		<div class="col-3  " style="background-color:#2B2024;height: 100vh;color: white;padding-top: 5%;">
			<h1 class="display-1" style="text-align: center;color:#FD0054;font-size: 3rem;">Admin Panel</h1><br><br>
			<!-- logout butn			 -->
			<a href="index.php" class="button" style="margin: 0;margin-left: 40%;">Log Out</a>
			
		</div>	
		<!-- first column end	 -->

		<!-- second column -->
		<div class="col-3 ">
			<center>
				<!-- handle contestants -->
			<div class="container-admin">
				<h2 class="display-2"> Handle contestants</h2>
				<br><br>
				<a href="forms/addcontestants.php" class="button">Add contestant</a><br><br>
				<a href="adminFunctions/seeContestants.php" class="button">see contestants</a>
				
			</div>		
				<!-- contestant details -->
			<div class="container-admin" style="height: 400px;">
				<h2 class="display-2"> Contestants</h2>
				<br><br>
				<h1 class="display-2" style="color: #84626e;">Number of Contestants :</h1>
				<h1 class="display-2" style="color: #FD0054;"><?php echo $allCon;?></h1>	
				<br><br>
				<h1 class="display-2" style="color: #84626e;">Number of users :</h1>
				<h1 class="display-2" style="color: #FD0054;"><?php echo $allUsers;?></h1>
				
			</div>	
			
			</center>
			
		</div>	
		<!-- second column ends	 -->

		<div class="col-3 ">
		<center>	
			<!-- handling vots -->
			<div class="container-admin" >
				<h2 class="display-2"> Handle votes</h2>
				<br><br>
			
				<a href="adminFunctions/checkVotes.php" class="button">votes</a><br><br>
				<a href="adminFunctions/createVoteSession.php" class="button">Voting Sessions</a>
				<a href="adminFunctions/seeVoteSession.php" class="button">session history</a>
			</div>			
			<!-- vote session details -->
			<div class="container-admin" >
				<h2 class="display-2"> Vote session</h2>
				<br><br>
			
				<h1 class="display-2" style="color: #84626e;">Session is :</h1>
				<h1 class="display-2" style="color: #FD0054;"><?php echo $status;?></h1>
				
			</div>
		</center>
			
		</div>		
		<!-- second column end -->

		<!-- third column  -->
			<div class="col-3" style="background-color:#f4f0f2">
				
			</div>
		<!-- third column end -->
	</div>
<!-- main section 1 ends -->





</body>
</html>