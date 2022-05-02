#!/usr/bin/php
<?php
	function split_to_hash($str){
        $regex = '/:/';
        $arr = preg_split($regex, $str, -1, PREG_SPLIT_NO_EMPTY);
        $hash_arr[$arr[0]] = $arr[1];
        return ($hash_arr);
    }

    $hash_arr = Array();

    $search = $argv[1];
	$i = 2;
    while ($i < $argc) { 
        $tmp_arr = split_to_hash($argv[$i]);
        $hash_arr = array_merge($hash_arr, $tmp_arr);
        $i++;
    }
    foreach ($hash_arr as $key => $value)
    {
        if ($search == $key && ($key != '0' && $search != '0'))
            echo "$value\n";
        else if ($key == '0' && $search == '0')
            echo "$value\n";
    }
?>