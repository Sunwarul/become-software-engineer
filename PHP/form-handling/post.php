<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
</head>
<body>
	<h2>Fill out the form</h2>
	
	<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
		<input type="text" name="name">
		<input type="number" name="age">
		<input type="submit" name="Submit">
	</form>

	<?php

	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		$name = $_POST['name'];
		$age = $_POST['age'];
		echo "$name $age";
	}

	?>
</body>
</html>