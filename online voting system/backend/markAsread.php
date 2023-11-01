<?php

$inquiryId = $_GET["id"];
//sql query
$sql= "update inquiry set isRead='read' where inquiryId='$inquiryId'";

//connecting the database
include 'sqlConnect.php';
$connOk = connectDB();

//execute query and check results
if($connOk->query($sql)==TRUE){
		echo "<script type='text/javascript'> alert('Mark as readed');window.location.href = '../itConsultant/itconsultantPortal.php';</script>";

}
else{
	echo "<script type='text/javascript'> alert('Failed');window.location.href = '../itConsultant/itconsultantPortal.php';</script>";
}







?>