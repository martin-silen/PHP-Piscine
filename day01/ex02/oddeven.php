#!/usr/bin/env php
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
			$res = ($input % 2)
			if ($res == 0)
				echo "The number " . $nb . " is even";
			else
				echo "The number " . $nb . " is odd";
		}
	}
?>
