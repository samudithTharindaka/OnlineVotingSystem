<!DOCTYPE html>
<html>
<head>
	<title>check votes</title>
	<!-- include  external files -->
	<?php include '../header.php';?>
	<link rel="icon" href="../src/images/logo.jpeg" type="image/x-icon">

	<style type="text/css">
		
		.col-3{
			background-color: #1d1618;
			margin-right: -2%;
			padding-top: 2%;
			

		}
		.col-9{
			width: 130%;
		}
		.display-1{
			color: #FD0054;
			font-weight: 600;
			text-align: center;
		}
	</style>
</head>
<body style="background-color: #2B2024;">
	<!-- main section -->
	<div class="row">

		<div class="col-3">
			<h1 class="display-1">Check Votes</h1>
			<a href="../admin.php" class="button" style="margin: 0;margin-left: 40%;">Dashbord</a>

			<!-- hidden contestant detail showing div -->
			<div class="contestant-Details" style="margin-top: 20%;margin-left: 5%; box-shadow: none;" id="datHidden">
   				<p class="lead" id="name">Name :</p>
   				<p class="lead" id="idnum">Name :</p>
   				<p class="lead" id="votes">Name :</p>
   			</div>
   			<!-- end hidden div -->
		</div>

		<!-- graph -->
		<div class="col-9">


			<?php  
                include '../result_partial.php';
            ?>
		</div>
		
	</div>


</body>
</html>