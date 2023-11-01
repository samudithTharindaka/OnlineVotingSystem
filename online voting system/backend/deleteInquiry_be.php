<?php
// get id
$inquiryId = $_GET["id"];

$sql= "DELETE FROM inquiry where inquiryId='$inquiryId'";

// connect db
include 'sqlConnect.php';
$connOk = connectDB();

//run query and notify
if($connOk->query($sql)==TRUE)
{
		echo "<script type='text/javascript'> alert('Contestant deleted successfully');window.location.href = '../itConsultant/itconsultantPortal.php';</script>";

}
else

{
	echo "<script type='text/javascript'> alert('Contestant delete failed');window.location.href = '../itConsultant/itconsultantPortal.php';</script>";
}







?>