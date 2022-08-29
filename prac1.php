<?php
	if(isset($_POST['submit']))
	{
		$n= $_POST['num'];
		for($i=1;$i<=10;$i++)
		{
			echo  "$n X $i =" . $n*$i ."<br>";
		}
	}
?>