#!/usr/local/bin/php
<?php
	$i = 0;
	while ($i < count($argv)) 
	{
		$str = trim(preg_replace("/\s+/", " ", $argv[1]));
		$i++;
	}
	echo ($str."\n");
?>