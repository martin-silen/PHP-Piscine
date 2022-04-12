#!/usr/bin/php
<?php
	while (1)
	{
		echo "Enter a number: ";
		$input = trim(fgets(STDIN));
		if (feof(STDIN) == TRUE)
			exit();

		if (!is_numeric($input))
			echo "'" . $input . "'" . " is not a number!\n";
		else
		{
			if ($input % 2 == 0)
				echo "The number " . $input . " is even\n";
			else
				echo "The number " . $input . " is odd\n";
		}
	}
?>

/*
trim = Strip whitespace (or other characters) from the beginning and end of a string
fgets = Gets line from file pointer. The file pointer must be valid, and must point to a file successfully opened by fopen() 
feof = Tests for end-of-file on a file pointer.
is_numeric = checks if the input is numeric or not
*/
