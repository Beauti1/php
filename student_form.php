<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
</head>
<body>
	<form method="post" action="student_form_process.php"> 
		<label>Roll Number:</label>
			<input type="numeric" name="roll_no" placeholder="Roll Number"><br> 
		<label>Name:</label>
			<input type="text" name="student_name" placeholder="Your Name"><br>
		<label>Course:</label>
			<input type="text" name="course" placeholder="Course"><br>
		<label>Semester: </label> 
		<select name="semester">>>
			<option value="1">1<sup>st</sup> Semester</option>
			<option value="2">2<sup>nd</sup> Semester</option>
			<option value="3">3<sup>rd</sup> Semester</option>
			<option value="4">4<sup>th</sup> Semester</ption>
			<option value="5">5<sup>th</sup> Semester</ption>
			<option value="6">6<sup>th</sup> Semester</ption>
		</select><br>
		<input type="submit" value="Submit">&nbsp;&nbsp;
		<input type="reset" value="Clear">
	</form>
</body>
</html>