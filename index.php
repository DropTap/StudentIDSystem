<!DOCTYPE html>
<html>
<head>
	<title>Student ID System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	if(!empty($_GET)){
    	$student = [];
    	$student['Student_ID_Number'] = $_GET['SID'];
    	$student['Last_Name'] = $_GET['LName'];
    	$student['First_Name'] = $_GET['FName'];
    	$student['Middle_Initial'] = $_GET['MInitial'];
    	$student['Course'] = $_GET['course'];
    	$student['Address'] = $_GET['address'];
    	$student['Birthdate'] = $_GET['birthdate'];
    	$studentArray = [];
    	array_push($studentArray, $student);
    	$str = print_r($studentArray, true);
    	file_put_contents('student.txt', $str, FILE_APPEND);
	}
	?>
	<h1>STUDENT ID SYSTEM</h1>
	<div id="container">
	<form method="GET">
		Student ID Number: <input type="text" name="SID" size="20" maxlength="11"><br>
		Last Name: <input class="lname" type="text" name="LName" size="20" maxlength="20"><br>
		First Name: <input class="fname" type="text" name="FName" size="20" maxlength="20"><br>
		Middle Initial: <input class="minitial" type="text" name="MInitial" size="20" maxlength="1"><br><br>
		Course:<br>
		<label><input type="radio" name="course" value="bsit" checked="checked">BS Information Technology</label><br>
		<label><input type="radio" name="course" value="bscs">BS Computer Science</label><br>
		<label><input type="radio" name="course" value="bsda">BS Data Analytics</label><br><br>
		Address:<br>
		<textarea name="address" rows="5" cols="40" placeholder="Input your address here..."></textarea><br><br>
		Birthdate:<br>
		<input type="date" name="birthdate"><br><br>
		<input type="submit" name="submit">
	</form>

	</div>
</body>
</html>