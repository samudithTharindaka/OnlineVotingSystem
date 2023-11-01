<!DOCTYPE html>
<html>
<head>
	<?php
		include "../header.php";

	?>
	<link rel="stylesheet" type="text/css" href="../src/css/forms.css">
	<title>Edit Notice</title>
	<link rel="icon" href="../src/images/logo.jpeg" type="image/x-icon">
</head>
<body >
<div class="bg" style="padding-top: 15%">

<!-- Form section -->
	<form action="../backend/editNotice_be.php"  method="Post" class="form-all">		
		
		<textarea name="editedNotice">
			<?php
				include '../backend/sqlConnect.php';		//connecting to the database
				$connOk=connectDB();
				$data = $_GET['id'];//getting notice id

				//getting the sql query from database
				$sql="SELECT * FROM notice where notice_id='$data';";

				$result = $connOk->query($sql);//execute query

				$userData = $result->fetch_assoc();//get the result row by row


				echo $userData['notice'];

			?>
		</textarea>

		<input type="hidden" name="id"value=<?php echo '"'.$data.'"' ; ?> >  <!-- Sending edited notice id to the backend as POST -->
		<input type="submit" name="editNotice" value="Publish">
	</form>
<!-- Form section end -->


</div>
</body>
</html>