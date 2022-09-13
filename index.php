<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>
	<div style="text-align: center;">
		<h1 style="color: blue">Welcome to Students' Registration</h1>
		<form action="" method="POST">
			<div>
				<label>Enter your Firstname:</label>
				<input type="text" name="firstname">
			</div>
			<br>
			<div>
				<label>Enter your Lastname:</label>
				<input type="text" name="lastname">
			</div>
			<br>
			<div>
				<label>Enter your Middle Initial:</label>
				<input type="text" name="middleinitial">
			</div>
			<br>
			<div>
				<label>Enter your Address:</label>
				<input type="text" name="address">
			</div>
			<br>
			<div>
				<label>Gender:</label>
				<input type="checkbox" name="gender" value="male">
				<label for ="male">Male</label>
				<input type="checkbox" name="gender" value="female">
				<label for ="female">Female</label><br>
			</div>
			<br>
			<div>
				<label>Enter your Course:</label>
				<input type="text" name="course">
			</div>
			<br>
			<div>
				<label>Enter your Year&Section:</label>
				<input type="text" name="yearsection">
			</div>
			<br>
			<div>
				<button type="submit" style="color: blue">Save</button>
			</div>
			<br>
		</form>
	</div>
</body>
</html>

<?php
	if (isset($_POST['firstname'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middleinitial = $_POST['middleinitial'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$course = $_POST['course'];
		$yearsection = $_POST['yearsection'];
		echo "<p>$firstname</p>";
		echo "<p>$lastname</p>";
		echo "<p>$middleinitial</p>";
		echo "<p>$address</p>";
		echo "<p>$gender</p>";
		echo "<p>$course</p>";
		echo "<p>$yearsection</p>";
	}
?>