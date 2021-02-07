<?php

$myarr = ['id' => 1, 'name' => 'John doe', 'age' => 25, 'preference' => [
	'color' => 'red',
	'location' => 'Bangladesh'
],
'date' => 'Jan 2, 20201'

];


foreach($myarr as $key => $value ) {
	if($key === 'preference') {
		echo "{\n";
		foreach($myarr['preference'] as $key => $value) {
			echo "\t{$key}: {$value}\n";
		}
		echo "}\n";
	} else {
		echo "{$key}: {$value}\n";
	}
}