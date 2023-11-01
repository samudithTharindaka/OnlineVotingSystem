<?php

//include database connection
include 'sqlConnect.php';
$connOk=connectDB();



if (isset($_POST['noticeSub'])) {


    //get data
    $notice = $_POST['notice'];
    
    //create and execute sql query
    $sql="INSERT INTO notice (notice,visible) VALUES ('$notice','y');";
    $result = $connOk->query($sql);

    // check result and redirect 
    if($result==TRUE){
    	echo"data added";
    	header("location:../judge/judge.php?data=add");
		exit();

    }else{
    	header("location:../judge/judge.php?data=addf");
		exit();

    }

    

}

?>