


<?php 
//handle session

$id=$_POST['id'];

//connect the database
include 'sqlConnect.php';

$newName = $_POST['name'];
$mail = $_POST['email'];
$phone = $_POST['4n'];

//create data
$sql="UPDATE contestant SET Name = '$newName', Email = '$mail',Contact_Number= '$phone' WHERE Contestant_Id = '$id';";


echo $sql;
$connOk=connectDB();

//execute and set it to a variable
$result = $connOk->query($sql);

//check and notify admin
if ($result==true) {
	 echo "<script>alert('Update Successful!'); window.location.href = '../adminFunctions/seeContestants.php';</script>";
}else {
	 echo "<script>alert('Update unsuccessful!'); window.location.href = '../adminFunctions/seeContestants.php';</script>";

}

 ?>