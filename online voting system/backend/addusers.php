<?php

//connecting external files
include 'sqlConnect.php';
session_start();

//getting data
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['mail'];
$pw = $_POST['pw'];

//making the db connection
$connOk = connectDB();

//Creating Data
$sql = "INSERT INTO registered_user (First_Name,Last_Name,Password,Email,role,voteAttempts) VALUES ('$fname','$sname','$pw','$email','user',5)";	

$sql2= "SELECT * FROM registered_user WHERE Email='$email';";

//Executing and return a boolean value
$result = $connOk->query($sql2);
$isnew=TRUE;
if ($result->num_rows > 0) {	
	$uData= $result->fetch_assoc();
	if($uData['Email']==$email){//check for previous registration with same email
		$isnew=false;
	}
	
}

if($isnew==TRUE){
		if($connOk->query($sql)==TRUE){		//Insert new data
			echo "done added to db";
			$_SESSION['user_id'] = $connOk->insert_id;//Create a session
			echo "<script type='text/javascript'> alert('user registered');window.location.href = '../user.php';</script>";

		}
		else
		{
			echo "failed";
			echo "<script type='text/javascript'> alert('failed');window.location.href = '../userFunctions/signup.html';</script>";
		} 

}else{
	echo "<script type='text/javascript'> alert('emaill is already registered');window.location.href = '../userFunctions/signup.html';</script>";

}



?>