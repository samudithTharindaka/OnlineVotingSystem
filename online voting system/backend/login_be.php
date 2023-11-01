<?php
		session_start();

		//getting data
		$mail = $_POST['email'];
		$pw = $_POST['pw'];


		//include database
		include 'sqlConnect.php';
		$connOk= connectDB();

		$sql="SELECT * FROM registered_user where email='$mail';";	//sql query

		$result = $connOk->query($sql);		//execute query

		$userData = $result->fetch_assoc();

		if($pw==$userData["Password"] && $userData["role"]=="admin"){		//validate admin credentials
			header("location:../admin.php");
			exit();

		}
		
		elseif ($pw==$userData["Password"] && $userData["role"]=="user") {		//validate user credentials
			echo "hi user";
			
			$_SESSION['user_id']= $userData["userId"];
					//redirecting to user portal
					header("location:../user.php");
					exit();

		}
		elseif($pw==$userData["Password"] && $userData["role"]=="itCon"){		//validate it consultanr credentials
			header("location:../itconsultant/itconsultantPortal.php");
			exit();
		}		
		elseif($pw==$userData["Password"] && $userData["role"]=="judge"){		//validate judge credentials
			header("location:../judge/judge.php?data=h");
			exit();
		}

		else{
			echo"failed";
			header("location:../login/login.php?failed=yes");
			exit();
		}








?>