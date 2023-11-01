<?php

//include configuration file
include 'sqlConnect.php';

$newFname = $_POST['fname'];
$newSname = $_POST['sname'];
$mail = $_POST['mail'];
echo $_POST['fname'];

//create data
$sql="UPDATE registered_user SET First_Name = '$newFname' WHERE Email = '$mail';";
$sql2="UPDATE registered_user SET Last_Name = '$newSname' WHERE Email = '$mail';";

echo $sql;
$connOk=connectDB();		

//execute
$result = $connOk->query($sql);
$result2 = $connOk->query($sql2);

//check and notify user
if ($result==true && $result2==true) {
	 echo "<script>alert('Update Successful!'); window.location.href = '../user.php';</script>";
}else {
	 echo "<script>alert('Update Unsuccessful!'); window.location.href = '../user.php';</script>";
}





?>