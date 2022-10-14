<?php
	$name = $_POST['ename'];
    $roll = $_POST['roll'];
	$course = $_POST['course'];
	$sem = $_POST['sem'];
    $phn = $_POST['phn'];
    
	$sql = "INSERT INTO finfo VALUES($roll, '$name','$course', '$sem', '$phn')";
	include('dbcon.php');

	if( $con->query($sql)== TRUE)
	{
		header("location:dy.php");
	}
	
	else
	{
		echo "ERROR: ". $con->error;
	}

?>
