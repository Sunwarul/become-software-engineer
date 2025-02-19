<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_REQUEST['name'];
	if(empty($name)) {
		echo 'Invalid';
	} else {
		echo $name;
	}
}