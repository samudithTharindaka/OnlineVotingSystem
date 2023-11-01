<?php
//handle session
session_start();
$uid=$_SESSION['user_id'];

//decleration
$cid=$_GET['cid'];
$currentVotes=0;
$newVotes=0;
$isdone =false;


//include db
include 'sqlConnect.php';
$connOk=connectDB();

//get the current votes
$sqlSelect="SELECT * FROM contestant WHERE Contestant_ID ='$cid';";
$result=$connOk->query($sqlSelect);
$row = $result->fetch_assoc();

//assigning
$currentVotes=$row['votes'];
$currentVotes++;//increase the vote by one
$newVotes=$currentVotes; 


//getting vote attempts of the user
$sqlSelect="SELECT * FROM registered_user where userId='$uid';";
$result3=$connOk->query($sqlSelect);
$row = $result3->fetch_assoc();
//assigning vote attempts
$currentattempts=$row['voteAttempts'];


if($currentattempts>0)//if user has more than 0 attempts remaining
{
		$sqlUpdate="UPDATE contestant SET votes= '$newVotes' WHERE Contestant_Id ='$cid';";
		$result2=$connOk->query($sqlUpdate);//update votes

		$currentattempts--;//decreasing an attempt after a successfull vote
		$sqlUpdate="UPDATE registered_user SET voteAttempts= '$currentattempts' WHERE userId ='$uid';";
		$result2=$connOk->query($sqlUpdate);//update attempts

		// update the votes in sessionDat table 
		$sqlSelectVotes="SELECT * FROM sessionDat WHERE status ='on';"; //get the votes in opened session
		$result=$connOk->query($sqlSelectVotes);
		$row = $result->fetch_assoc();

		//assigning the votes and increasing by one
		$currentVotes=$row['votes'];
		$currentVotes++;//increase the vote by one
		$newVotes=$currentVotes; 
		$sqlUpdate="UPDATE sessionDat SET votes= '$newVotes' WHERE status ='on';";
		$result2=$connOk->query($sqlUpdate);//update votes




		$isdone=true;//getting the result true on success

}

//redirect and notify the user
if ($isdone==TRUE) {
	header("Location: ../userFunctions/vote.php?vresult=done"); 
	exit();

}
else{
	header("Location: ../userFunctions/vote.php?vresult=fail"); 
	exit();
}


?>