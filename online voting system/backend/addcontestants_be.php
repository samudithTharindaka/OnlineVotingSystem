<?php
//connecting external files
include 'sqlConnect.php';

//getting data in to variables
$name = $_POST['name'];
$email = $_POST['email'];
$pw1 = $_POST['pw-1'];
$phone = $_POST["phonenumber"];


//inser data
$sql = "INSERT INTO contestant (Name, Email, Password, Contact_Number,visible) VALUES ('$name', '$email', '$pw1', '$phone','v');";
$conn_md = connectDB();

//execute and notify
if($conn_md->query($sql)==TRUE){
	echo "done added to db";
	echo "<script type='text/javascript'> alert('Contestant added successfully');window.location.href = '../forms/addcontestants.php';</script>";

}
else{
	echo "<script type='text/javascript'> alert('Contestant add failed');window.location.href = '../forms/addcontestants.php';</script>";
}

?>

