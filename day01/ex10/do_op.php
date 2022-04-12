#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $regex = '/\s+/';
        $arr = preg_split($regex, $str, -1, PREG_SPLIT_NO_EMPTY);
        return ($arr);
    }

    function ssap($arr_total)
    {
        $arr = array();
		$i = 0;
        while ($i < count($arr_total)) 
		{
            $tmp_arr = ft_split($arr_total[$i]);
            $arr = array_merge($arr, $tmp_arr);
			$i++;
        }
        return ($arr);
    }

    function find_op($op){
        if ($op == "+")
            return 1;
        if ($op == "-")
            return 2;
        if ($op == "*")
            return 3;
        if ($op == "/")
            return 4;
        if ($op == "%")
            return 5;
        else
            return 0;
    }

    if ($argc != 4)
        echo "Incorrect Parameter";
    array_shift($argv);
    $arr = ssap($argv);
    $op = find_op($arr[1]);
    if ($op == 1)
        $res = $arr[0] + $arr[2];
    else if ($op == 2)
        $res = $arr[0] - $arr[2];
    else if ($op == 3)
        $res = $arr[0] * $arr[2];
    else if ($op == 4)
        $res = $arr[0] / $arr[2];
    else if ($op == 5)
        $res = $arr[0] % $arr[2];
    echo "$res\n";
?>