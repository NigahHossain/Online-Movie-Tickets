<?php
require_once('DBconnection.php');

if (isset($_POST['username'])) {
	$u = $_POST['username'];
	
	$sql = "ALTER TABLE users ADD $u varchar(40) NOT NULL AFTER password";
	
	$result = mysqli_query($conn,$sql);
	
	  $conn->query($sql);
	  header("location: admin.php");
    }

?>