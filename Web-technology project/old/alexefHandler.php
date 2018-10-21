<?php
	$text = $_POST["txtar"];
	$letters = array();
	
	for ($i = 0; $i < strlen($text); $i++)
		$letters[$text[$i]]++;
	print_r($letters);
?>