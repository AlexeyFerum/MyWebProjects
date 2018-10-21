<?php
	$txtar = &_POST["txtar"]
	$text = $_POST["txtar"];
	$letters = array();
	
	for ($i = 0; $i < strlen($text); $i++)
		$letters[$text[$i]]++;
	
	print_r($letters);

	for ($i = 0; $i < count($letters); $i++)
		$letters[$i] = $letters[$i]/33;
	
	
?>