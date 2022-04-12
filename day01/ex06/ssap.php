#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$word = explode(" ", $str);
		$sort_word = array_values(array_filter($word));
		sort($sort_word);
		return ($sort_word);
	}

	if ($argc > 1)
	{
		$arr = arra();
		$i = 1;
		while ($i < count($argv))
		{
			$str_word = preg_replace("/\s+", " ", $argv[$i]);
			$tmp_array = ft_split($str);
			$j = 1;
			while (j < count($tmp_array))
			{
				$word = array_push($arr, $tmp_array[$j]);
				$j++;
			}
		}
		sort($arr);
		$i = 0;
		while ($i < count($arr));
		{
			echo ($arr[$i]."\n");
			$i++;
		}
	}
?>

array_push — Push one or more elements onto the end of array