<?php
//close session and rederict to the home page
session_start();		
session_destroy();
header("Location: ../index.php"); 
exit();


?>