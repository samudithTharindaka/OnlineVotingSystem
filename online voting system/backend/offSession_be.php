<?php
// Include external files
include 'sqlConnect.php';
$connOk = connectDB();

// Updating session table
$sql2 = "UPDATE session SET status='off' WHERE 1;";
$result2 = $connOk->query($sql2);

// Getting the most voted contestant
$sql3 = "SELECT Contestant_Id FROM contestant WHERE Votes = (SELECT MAX(Votes) FROM contestant);";
$result3 = $connOk->query($sql3);
$winner = $result3->fetch_assoc();
$winnerId = $winner['Contestant_Id'];

// Updating the sessionDat table
$sql4 = "UPDATE sessionDat SET status='off', winner='$winnerId' WHERE status='on';";
$result4 = $connOk->query($sql4);

if ($result2 === TRUE && $result4 === TRUE) {
    echo "<script>alert('Session closed!'); window.location.href = '../admin.php';</script>";
} else {
    echo "<script>alert('Failed to close session!'); window.location.href = '../admin.php';</script>";
}
?>