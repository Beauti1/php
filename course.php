<html>
<head>
	<title>Course Management</title>
	<style type="text/css">
		form{
			border :1px gray solid;
			width: 50%;
		}

		.gap{
			margin-left:  10px;
		}

		caption{
			font-size: 25px;
			font-weight: 200;
			font-style: italic;
		}
	</style>
</head>
<body>
	<form method="post" action="">
		<table>
			<caption>Add new course</caption>
			<tr><td>Course name:</td>
				<td><input type="text" size="30" name="course_name"></td>
			</tr>

			<tr><td>Short Name </td>
				<td><input type="text" size="30" name="course_short"></td>
			</tr>

			<tr><td></td>
				<td><input type="submit" name="submit" value="Add Course">
				<input class="gap" type="reset" value="clear"></td>
			</tr>
		</table>
	</form>

	<?php
		if (isset($_POST['submit'])) 
		{
			#var_dump($_POST);
			$errors = "";
			if (!isset($_POST['course_name']) or strlen($_POST['course_name'])) 
				$errors .= "<br> Error- Invalid course name.";

			if(!isset($_POST['course_short']) or strlen($_POST['course_short']))
				$errors .= "<br> Error- Invalid course short name.";

			if(strlen($errors))
				die ($errors);
		}


		$course_name = $_POST[' course_name '];
		$course_short = $_POST[' course_short '];

		$sql = "INSERT INTO course VALUES (default, '$course_name', '$course_short')";

		include ('DBconn.php');
		if ($con ->query ($sql) == true)
		{
			echo "Course added successfully.";
		}

		else{
			echo "Error ->". $con -> error;
		}

	?>
</body>
</html>