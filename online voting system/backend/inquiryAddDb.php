<?php
//get data
$name= $_POST['name'];
$inquiry = $_POST['inquiry'];


echo $name;
echo $inquiry;

//include db connect function
include 'sqlConnect.php';

$connOk = connectDB();

//sql query
$sql = "INSERT INTO inquiry (name,inquiry,isRead)VALUES ('$name','$inquiry','no')";

//execute query and check result
if($connOk->query($sql)==TRUE){
	echo "done added to db";
	echo "<script type='text/javascript'> alert('inquiry sent successfully');</script>";		//notify 
	header("location:../userFunctions/inquiry.php?result=y");
	exit();
	


}
else{
	header("location:../userFunctions/inquiry.php?result=no");
	exit();
}




?>