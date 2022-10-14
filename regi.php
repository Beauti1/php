<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Registration Form</title>
	<style type="text/css">
		
		fieldset
		{
			border-radius: 30px;
			border: 1px solid black;
		}
		
	</style>
</head>
<body>
	<fieldset>
	<legend><p class="hd2"> Registration Form</p></legend>
	<form method="post" action="action.php"  name="myform">
	<table class="center">
	 	<tr>
	 	 	<td><label>Name:</td>
			<td><input type="text" size="40" style="font-size:15px;" name="ename" id="ename">
        </tr>
        <tr>
	 	 	<td><label>Roll no.:</td>
			<td><input type="text" size="40" style="font-size:15px;" name="roll" id="roll">
        </tr>
	    <tr>
	 	 	<td>Course:</td>
	 		<td><input type="text" size="40" style="font-size:15px;" name="course" id="course"></td>
        </tr>
		<tr>
            <td><label>Semester: </label></td>
			<td><input type="text" size="40" style="font-size:15px;" name="sem" id="sem"></td>
        </tr>
		<tr>
			<td><label>Phone No.: </label></td>
			<td><input type="text" size="40" style="font-size:15px;" name="phn" id="phn"></td>
        </tr>
	 	<tr>
	 	 	<td></td>
	 		<td><button type="submit" name="submit">Register</button>
			 <button type="reset" class="button">Clear All</button></td>
		</tr>
    </table>
	</fieldset>
	</form>
</body>
</html>