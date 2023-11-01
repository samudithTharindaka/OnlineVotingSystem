<!-- php backend -->
<?php
	
		include 'sqlConnect.php';//include the  database connection

		$connOk=connectDB();
		//get the data 
		$noticeId = $_POST['id'];
		$notice = $_POST['editedNotice'];

		//create data
		$sql2= "UPDATE notice SET notice='$notice' WHERE notice_id='$noticeId'";

		//execute the query and check the result
		if($connOk->query($sql2)==TRUE){
			//if true redirect a
			header("location:../judge/judge.php?data=edited");
			exit();

		}
		else{
			//false
			header("location:../judge/judge.php?data=editF");
			exit();
		}




?>