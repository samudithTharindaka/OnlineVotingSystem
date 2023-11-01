<?php

$sessionName = $_POST['sessionName'];

include 'sqlConnect.php';

//making the db connection
$connOk = connectDB();

//Creating Data
$sql = "INSERT INTO sessionDat (name,status,votes) VALUES ('$sessionName','on',0);";

$result = $connOk->query($sql);

//updating session table

$sql2= "UPDATE session SET status='on' WHERE 1;";
$result2 = $connOk->query($sql2);

//updating all users voteAttemps to 5

$sql = "SELECT * FROM registered_user;";
$result = $connOk->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $userId = $row['userId']; 
        $updateSql = "UPDATE registered_user SET voteAttempts = 5 WHERE userId = $userId;";
        $connOk->query($updateSql);
    }
    echo "Vote attempts updated for all users.";
} else {
    echo "No users found.";
}



if($result==TRUE&&$result2==TRUE){
	 echo "<script>alert('session opened!'); window.location.href = '../admin.php';</script>";
}else{
	 echo "<script>alert('session open failed!'); window.location.href = '../admin.php';</script>";

}

?>