#!/usr/bin/php
<?php
	if ($argc > 1)
    {
        $word = preg_split("/ +/", trim($argv[1]));
        print_r(implode(" ", $word));
        echo("\n");
    }
?>