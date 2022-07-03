<?php
	$roll= $_POST['roll_no']; 
	$name=$_POST['student_name'];
	$course= $_POST['course'];  
	$semester =  $_POST['semester'];
	$sql = "INSERT INTO student VALUES ($roll, '$name', '$course', '$semester')"; 
	include('DBconn.php');
	/*	
	if( $con->query( $sql) == TRUE){ 
		echo "RECORD INSERTED SUCCESSFULLY.<br>";
    }
	else {
    	echo "ERROR: ".$con->error;
    }
	*/


$con->query($sql);
 if($con->errno) {
	echo "ERROR: ".$con->error;
}

 else {
	echo "RECORD INSERTED SUCCESSFULLY.<br>";
}



con->close();



?>