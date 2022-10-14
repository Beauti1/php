 <?php
 	$host = "localhost";
 	$username = "root";
 	$password = "";
 	$dbname = "practical";

 	$con = new mysqli($host, $username, $password, $dbname);
 	if($con -> connect_errno)
 		echo "Error: $con -> connect_errno";
 ?>