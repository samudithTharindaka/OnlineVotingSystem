<?php
session_start();
$id= $_SESSION['user_id'];
echo $id;


$sql= "DELETE FROM registered_user where userId='$id'";

// connect db
include 'sqlConnect.php';
$connOk = connectDB();

//run query and notify
if($connOk->query($sql)==TRUE)
{
		echo "<script type='text/javascript'> alert('Contestant deleted successfully');window.location.href = '../index.php';</script>";

}
else

{
	echo "<script type='text/javascript'> alert('Contestant delete failed');window.location.href = '../index.php';</script>";
}




?>