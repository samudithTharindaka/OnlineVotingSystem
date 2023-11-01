<!DOCTYPE html>
<html>
<head>
		<?php
		//connecting outer php files
		include "../header.php";
		include '../backend/sqlConnect.php';
		?>
	<!-- link css -->
	<link rel="stylesheet" type="text/css" href="../src/css/forms.css">
	<link rel="icon" href="../src/images/logo.jpeg" type="image/x-icon">

	<title>edit contestants</title>
</head>
<body >

<!-- main section	 -->
<div class="bg" style="padding-top: 15%">

	<?php		
			$connOk=connectDB();
			$data = $_GET['id'];//getting contestantId


			$sql="SELECT * FROM contestant where Contestant_Id='$data';";

			$result = $connOk->query($sql);//run sql
			$userData = $result->fetch_assoc();//get 1st row
	?>

	<a href="seeContestants.php" class="button"> Back</a>
<!-- form section -->
	<form action="../backend/editContestant_be.php"  method="Post" class="form-all">
		
		<input type="text" name="name" placeholder="<?php echo $userData['Name'];?>">
		<input type="text" name="email" placeholder="<?php echo $userData['Email'];?>">
		<input type="text" name="4n" placeholder="<?php echo $userData['Contact_Number'];?>">
	

		<input type="hidden" name="id"value="<?php echo $data;?>" >
		<input type="submit" name="editNotice" value="edit" >
	</form>
<!-- form section ends -->
</div>
<!-- main section ends -->
</body>
</html>