<?php

	$noticeId = $_GET["id"];

	$sql= "DELETE FROM notice WHERE notice_id='$noticeId'";

	include 'sqlConnect.php';//include database connection

	$connOk = connectDB();//db connect

	//execute query and redirect
	if($connOk->query($sql)==TRUE){
		echo "done and updated";
		header("location:../judge/judge.php?data=updated");		
		exit();

	}
	else{
		header("location:../judge/judge.php?data=updatef");		
		exit();
}




?>