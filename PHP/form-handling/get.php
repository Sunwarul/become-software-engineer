<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
</head>
<body>
	<h2>Fill out the form</h2>

	<a href="get.php?user=Sunwarul&age=25">GET Request</a>

	<?php

	$name = $_GET['user'];
	$age = $_GET['age'];
	echo "$name $age";


	?>
</body>
</html>