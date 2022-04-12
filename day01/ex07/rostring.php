#!/usr/bin/php
<?php
	if ($argc > 1)
    {
        $i = 0;
		while ($i < $argc)
        {
            $str = trim(preg_replace("/\s+", " ", $argv[1])); //$argv skall kanske vara $argv[$i]
            $tmp_arr = explode(" ", $str);
			$i++;
        }
		$i = 1;
        while ($i < count($tmp_arr))
		{
			echo ($tmp_arr[$i]." ");
			$i++;
		}
        echo ($tmp_arr[0]."\n");
    }
?>