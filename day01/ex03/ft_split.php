#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$word = explode(" ", $str);
		$sort_word = array_values(array_filter($word));
		sort($sort_word);
		return ($sort_word);
	}
?>

/*
Explode = Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries
Array-values = array_values() returns all the values from the array and indexes the array numerically.
Array_filter = Array keys are preserved, and may result 
				in gaps if the array was indexed. The result array can be reindexed using the array_values() function.
Sort = 	Sorts array in place by values in ascending order.
*/