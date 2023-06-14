<?php
require_once('DBconnection.php');
session_start();

if (isset($_POST['privilege']) && isset($_POST['username'])) {
	$a = $_POST['privilege'];
	$u = $_POST['username'];
	
	$sql = "UPDATE users SET privilege='$a' WHERE username = '$u'";
	
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_affected_rows($conn)){
		
		header("location: admin.php");
    }
	else{
		
		header("location: admin.php");
    }
}

?>