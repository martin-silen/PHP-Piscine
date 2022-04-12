<?php
	if ($argc != 2)
		exit();
	$str_word = preg_replace("/\s+", " ", $argv[$i]);
	$str = trim($str_word);
	echo ("$str\n");
?>