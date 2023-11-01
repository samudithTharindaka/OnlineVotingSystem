<?php
	
	//getting id
	$id= $_GET['id'];

	
	// delete query
	$sql= "DELETE FROM contestant WHERE Contestant_Id='$id'";

	include 'sqlConnect.php';//include database connection
	$connOk = connectDB();

	//run the query and redirect
	if($connOk->query($sql)==TRUE){//on success
		echo "<script type='text/javascript'> alert('Deleted Successfully');window.location.href = '../adminFunctions/seeContestants.php';</script>";

	}
	else{
		
		echo "<script type='text/javascript'> alert('Delete Failed');window.location.href = '../adminFunctions/seeContestants.php';</script>";

		
}




?>