<?php

// TODO:: detect why this line making the upload function working. 
header("Location: fileupload.php");

$target_file = "uploads/" . basename($_FILES["filename"]["name"]);

if (isset($_POST["submit"])) {
	if (move_uploaded_file($_FILES["filename"]["tmp_name"], $target_file)) {
		echo "The file " . basename($_FILES["filename"]["name"]) . " has been uploaded.";
	}
}
